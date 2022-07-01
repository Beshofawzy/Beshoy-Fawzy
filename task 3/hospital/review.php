<?php

session_start();

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $example = $_POST['example'];
    $example1 = $_POST['example1'];
    $example2 = $_POST['example2'];
    $example3 = $_POST['example3'];
    $example4 = $_POST['example4'];

    if (empty($_POST['example'])) {
        $errors['example'] = "<div class='text-danger font-weight-bold'>please answer the first question</div>";
    }
    if (empty($_POST['example1'])) {
        $errors['example1'] = "<div class='text-danger font-weight-bold'>please answer the second question</div>";
    }
    if (empty($_POST['example2'])) {
        $errors['example2'] = "<div class='text-danger font-weight-bold'>please answer third question</div>";
    }
    if (empty($_POST['example3'])) {
        $errors['example3'] = "<div class='text-danger font-weight-bold'>please answer fourth questions</div>";
    }
    if (empty($_POST['example4'])) {
        $errors['example4'] = "<div class='text-danger font-weight-bold'>please answer fourth questions</div>";
    }

    if (empty($errors)) {
        
        header('location:result.php');
        die;
    }
}










?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Review page</title>
</head>

<body>
    <form action="result.php" method="post">

        <div class="form" style="
    width: 60%;
    margin: auto;
    margin-top: 50px;
">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="
    width: 50%;">Question</th>
                        <th scope="col" style="text-align: center;">Bad</th>
                        <th scope="col" style="text-align: center;">Good</th>
                        <th scope="col" style="text-align: center;">Very Good</th>
                        <th scope="col" style="text-align: center;">Excelent</th>
                    </tr>
                </thead>
                <tbody>

                    <tr name="q1">

                        <td>re you satisfied with the level of cleanliness?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example" id="example2" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example" id="example2" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="example" id="example24" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example" id="example25" value="excelent">
                            </div>
                        </td>


                    </tr>
                    <tr name="q2">
                        <td>are you satisfied with the service prices</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example1" id="QUE1" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example1" id="QUE1" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="example1" id="QUE1" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example1" id="QUE1" value="excelent">
                            </div>
                        </td>


                    <tr name="q3">
                        <td>are you satisfied with the nurcing service?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example2" id="QUE2" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example2" id="QUE2" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="example2" id="QUE2" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example2" id="QUE2" value="excelent">
                            </div>
                        </td>

                    </tr>
                    <tr name="q4">
                        <td>are you satisfied with the level of doctor?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example3" id="QUE3" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example3" id="QUE3" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="example3" id="QUE3" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example3" id="QUE3" value="excelent">
                            </div>
                        </td>

                    </tr>
                    <tr name="q5">
                        <td>are you satisfied with the level of the calmness in the hospital?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example4" id="QUE4" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example4" id="QUE4" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="example4" id="QUE4" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="example4" id="QUE4" value="excelent">
                            </div>
                        </td>

                    </tr>




                </tbody>

            </table>
            <div><?= $errors['example'] ?? "" ?></div>
            <div><?= $errors['example1'] ?? "" ?></div>
            <div><?= $errors['example2'] ?? "" ?></div>
            <div><?= $errors['example3'] ?? "" ?></div>
            <div><?= $errors['example4'] ?? "" ?></div>

            <div>
                <button type="submit" class="btn btn-warning " style="margin-top: 20px;width: 100%;">Result</button>

            </div>


    </form>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>

</html>