<?php
include 'data.php';
$key = $_GET['id'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>T-shirts Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" </head>


<body>
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
      <br />
      <br />

      <div class="row">

        <?php
        if (array_key_exists($key, $pTname)) {
        ?>

          <div class="col-lg-5">
            <img src=" <?= $pTpic[$key] ?>" width="95%" height="95%" />
          </div>
          <div class="col col-md-4">
            <div class="card h-100 border-0">
              <h2><?= $pTname[$key] ?></h2>
              <p style="color:red;"><?= $pTprice[$key] ?> PKR</p>
              <p><?= $pTdetails[$key] ?></p>
              <br />
            <?php
          } else {
            echo "<h3>Product doesnot exist</h3>";
          }
            ?>
            <a style="width:100%;" href="tshirts.php"><button class="btn btn-outline-dark">Back to T-shirts Product</button></a>
            </div>
          </div>
      </div>
    </div>
</body>

</html>