<?php

if ($_GET) {
    $name = $_GET['name'];
    $amount = $_GET['amount'];
    $year = $_GET['years'];


    if ($year <= 3) {
        $interest = $amount * 0.1 * $year;
    } else {
        $interest = $amount * 0.15 * $year;
    }


    $total = $amount + $interest;

    $monthly = $total / ($year * 12);
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>loan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="text-align: center;">
    <h1 style="color: orange;">Bank</h1>
    <form method="get">
        <input type="text" name="name" placeholder="Name" value="<?= $_GET["name"] ?? " " ?> ">
        <input type="Number" name="amount" placeholder="Amount" value="<?= $_GET["amount"] ?? " " ?>">
        <input type="Number" name="years" placeholder="Years of Loan" value="<?= $_GET["years"] ?? " " ?>">
        <button type="submit" class="btn btn-warning">Calculate</button>
        <br><br>

        <p> Your Name Is : <?= $name ?? "" ?> </p>
        <p> Interest Rate : <?= $interest ?? "" ?> </p>
        <p> Loan After Interest : <?= $total ?? "" ?> </p>
        <p> Monthly : <?= $monthly ?? "" ?></p>


    </form>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>