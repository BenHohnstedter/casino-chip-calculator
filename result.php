<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">
<title>Beach Casino Night - Chip Rechner</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" href="Resource/Img/casino-icon.png">
<link rel="stylesheet" href="Resource/Css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<body class="own-bg-primary h-100 d-flex align-items-center justify-content-center">

    <?php

    $chips = $_POST['chip'];

    $chipsValues = $chips['value'];
    $chipsQuantities = $chips['quantity'];

    $result = 0;
    $i = 0;
    foreach ($chipsValues as $value) {
        if ($chipsQuantities[$i] === '') {
            $chipQuantity = 0;
        } else {
            $chipQuantity = $chipsQuantities[$i];
        }
        ;
        $result = $result + $value * $chipQuantity;
        $i++;
    }
    ?>

    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row d-flex justify-content-center w-100">
            <div class="card text-center col-10 col-sm-8 col-lg-7 mt-3 mb-3 own-bg-secondary rounded-1">
                <div class="card-body">
                    <h5 class="card-title pb-3">Dein Ergebnis</h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Wertigkeit</th>
                                <th scope="col">Anzahl</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($chipsValues as $value) {
                                if ($chipsQuantities[$i] === '') {
                                    $chipQuantity = 0;
                                } else {
                                    $chipQuantity = $chipsQuantities[$i];
                                }
                                ;
                                ?>

                                <tr>
                                    <td><?= $value ?></td>
                                    <td><?= $chipQuantity ?></td>
                                </tr>

                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>

                    <div class="">
                        <span class="fw-bold p-2 rounded-3 text-white fw-bold card-text">
                            Gesamt: <?= $result ?> Punkte
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-7 d-flex justify-content-center mb-3 mt-3 p-0">
                <a href="index.php" class="btn own-bg-secondary w-100">neue Rechnung anfangen</a>
            </div>
        </div>
    </div>
</body>

</html>