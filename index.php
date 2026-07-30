<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">
<title>Beach Casino Night - Chip Rechner</title>
<link rel="icon" href="Resource/Img/casino-icon.png">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="Resource/Css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<body class="own-bg-primary">

    <?php

    $values = [1, 5, 10, 25, 50, 100, 500, 1000]

        ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="own-bg-secondary rounded-1 mt-3 p-3">
                    <h1 class="text-center">Beach Casino Night - Chip Rechner</h1>
                </div>
                <form action="result.php" method="post" class="col-12">

                    <?php
                    $i = 0;
                    foreach ($values as $value) {
                        ?>
                        <div class="card col-12 mt-3 mb-3 own-bg-secondary rounded-1 p-3">
                            <div class="bg-white w-100 d-flex justify-content-center rounded-1">
                                <img src="Resource/Img/chip<?= $value ?>.webp" class="card-img-top chip-size img-fluid"
                                    alt="">
                            </div>
                            <div class="card-body pt-3 pb-0 ps-0 pe-0">
                                <div class="input-group rounded-1">
                                    <span class="input-group-text pt-3 pb-3">Wertigkeit: <?= $value ?></span>
                                    <input type="hidden" name="chip[value][<?= $i ?>]" value="<?= $value ?>">
                                    <input type="number" name="chip[quantity][<?= $i ?>]" class="form-control pt-3 pb-3"
                                        placeholder="Chip Anzahl">
                                </div>
                            </div>
                        </div>


                        <?php
                        $i++;
                    }

                    ?>

                    <div class="col-lg-12 d-flex justify-content-center mb-3 mt-3 p-0">
                        <button type="submit" class="btn own-bg-secondary w-100">Berechnen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>