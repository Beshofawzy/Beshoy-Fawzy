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
          CALCULATOR
        </div>
      </div>
      <div class="col-6 offset-3">
        <form method="post">
          <div class="<div class=" form-group>
            <label for="one"></label>
            <input type="text" name="one" id="one" class="form-control" placeholder=" ENTER FIRST NUMBER" aria-describedby="helpId">
          </div>
          <div class="<div class=" form-group>
            <label for="two"></label>
            <input type="text" name="two" id="two" class="form-control" placeholder="ENTER SECONED NUMBER" aria-describedby="helpId">
          </div>
          <br>
          <SElect name="operator" class="form control">
            <option>None</option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
          </SElect>
          <br><br>
          <input type="submit" name="submit" value="calculate" class="btn btn-success">
        </form>
        <br>
        <br>
        <h4> the answer is:</h4>
        <div id="answer">
          <?php
          if (isset($_POST['submit'])) {
            $result1 = $_POST['one'];
            $result2 = $_POST['two'];
            $sign = $_POST['operator'];

            switch ($sign) {
              case '+':
                echo $result1 + $result2;
                break;

              case '-':
                echo $result1 - $result2;
                break;

              case '*':
                echo $result1 * $result2;
                break;

              case '/':
                echo $result1 / $result2;
            }
          }





          ?>

        </div>
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