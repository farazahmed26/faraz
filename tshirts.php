<?php
include 'data.php';
?>
<html>

<head>
    <title>T-shirts Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<section class="py-5" style="background-color:black;padding-top:1rem!important;padding-bottom:0rem!important">
    <!-- Navbar -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Section -->
    <?php
    include 'section.php';
    ?>

    <div class="container">
        <br>
        <h2 style="text-align:center;">T-shirts Product</h2>
        <br>
        <br>
        <div class="row">
            <?php
            foreach ($pName as $k => $v) {
            ?>
                <div class=" col col-md-3">
                    <div class="card border-0" style="width:100%;">
                        <img src=" <?= $pPic[$k] ?>" width="100%" height="100%" />
                        <br>
                        <p><b> <?= $v ?></b></p>
                        <p>Model Number: <?= $pTmodel[$k] ?></p>
                        <p><?= $pPrice[$k] ?> PKR</p>
                        <p><a style="width:100%;" href="Tdetail.php?id=<?= $k ?>" class="btn btn-outline-dark">Details</a></p>
                        <br>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="container">
        <?php
        include 'footer.php';
        ?>
    </div>

    <body>