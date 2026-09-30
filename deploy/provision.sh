#!/usr/bin/env bash
set -euo pipefail

REPO_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$REPO_ROOT"

PROJECT="$(basename "$REPO_ROOT")"
BRANCH="$(git symbolic-ref --short -q HEAD 2>/dev/null || echo main)"

echo "[homelab] $PROJECT | Branch: $BRANCH"

if [ "$BRANCH" != "main" ]; then
    echo "[homelab] Wechsle auf main (Live-Betrieb)"
    git checkout -q main
fi

echo "[homelab] Ziehe neuesten Stand von origin/main ..."
git fetch -q origin main
git reset -q --hard origin/main

if ! git ls-remote --heads origin develop | grep -qP '\trefs/heads/develop$'; then
    echo "[homelab] develop existiert nicht -> vom main abzweigen"
    git branch -f develop origin/main
    git push -q -u origin develop
else
    echo "[homelab] develop existiert bereits auf GitHub"
fi

if [ -f deploy/docker-compose.yml ]; then
    echo "[homelab] Starte/aktualisiere Compose-Stack ..."
    docker compose -f deploy/docker-compose.yml up -d --force-recreate
    PUBLISHED=$(docker port casino-chip-calculator 80 2>/dev/null || echo '?')
    echo "[homelab] Fertig: $PROJECT laeuft auf $PUBLISHED"
else
    echo "[homelab] Hinweis: kein deploy/docker-compose.yml vorhanden"
fi