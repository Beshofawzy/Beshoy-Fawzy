<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>

  <div class="container">
    <div class="row">
      <div class="col-12 my-5">
        <div class=" h1 text-center text-dark">
          ElECTRICTY BILL
        </div>
      </div>
      <div class="col-6 offset-3">
        <form method="post">
          <div class="<div class=" form-group>
            <label for="one"></label>
            <input type="text" name="unit" class="form-control" placeholder="ENTER UNITS" aria-describedby="helpId">
          </div>
          <br>
          <button class="btn btn-outline-success btn-sm"> Check </button>
        </form>
        <br><br>
        <?php

        $first = 0.50;
        $seconed = 0.85;
        $third = 1.20;
        $fourth = 1.50;
        define("VAT", 0.2);
        if ($_POST["unit"] <= 50) {
          $price = ($_POST["unit"] * $first);
        } elseif ($_POST["unit"] <= 150) {
          $price = ($_POST["unit"] * $seconed);
        } elseif ($_POST["unit"] <= 250) {
          $price = ($_POST["unit"] * $third);
        } elseif ($_POST["unit"] > 250) {
          $price = ($_POST["unit"] * $fourth);
        }
        $surcharge = $price * 0.2;

        echo "THE ELECTRICTY BILL :"  .   $price . 'EGP' .
          '<br>';
        echo "THE SURCHARGE :" .  $surcharge . 'EGP';
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>