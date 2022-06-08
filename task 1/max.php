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
          Git MAX & MIN
        </div>
      </div>
      <div class="col-6 offset-3">
        <form method="post">
          <div class="<div class=" form-group>
            <label for="one">Number One</label>
            <input type="text" name='number1' id="one" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="<div class=" form-group>
            <label for="two">Number Two</label>
            <input type="text" name='number2' id="two" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="<div class=" form-group>
            <label for="three">Number Three</label>
            <input type="text" name='number3' id="three" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <br>
          <button class="btn btn-outline-success btn-sm"> Check </button>

        </form>


        <?php
        if ($_POST) {
          if ($_POST['number1'] > $_POST['number2'] && $_POST['number1'] > $_POST['number3']) {
            $max = "THE MAX NUMBER IS : {$_POST['number1']}";
          } elseif ($_POST['number2'] > $_POST['number1'] && $_POST['number2'] > $_POST['number3']) {
            $max = "THE MAX NUMBER IS : {$_POST['number2']}";
          } elseif ($_POST['number3'] > $_POST['number1'] && $_POST['number3'] > $_POST['number2']) {
            $max = "THE MAX NUMBER IS : {$_POST['number3']}";
          }



          if ($_POST['number1'] < $_POST['number2'] && $_POST['number1'] < $_POST['number3']) {
            $min = "THE MIN NUMBER IS : {$_POST['number1']}";
          } elseif ($_POST['number2'] < $_POST['number1'] && $_POST['number2'] < $_POST['number3']) {
            $min = "THE MIN NUMBER IS : {$_POST['number2']}";
          } elseif ($_POST['number3'] < $_POST['number1'] && $_POST['number3'] < $_POST['number2']) {
            $min = "THE MIN NUMBER IS : {$_POST['number3']}";
          }
          echo $max .
            '<br>';
          echo $min;
        }


        ?>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>