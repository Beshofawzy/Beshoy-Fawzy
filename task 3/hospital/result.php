<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $example = $_POST['example'];
    $example1 = $_POST['example1'];
    $example2 = $_POST['example2'];
    $example3 = $_POST['example3'];
    $example4 = $_POST['example4'];
    $total = '';
    $final = '';


    switch ($example) {
        case 'bad':
            $total = 0;
            break;
        case 'good':
            $total = 3;
            break;
        case 'verygood':
            $total = 5;
            break;
        case 'excelent':
            $total = 10;
            break;
    }
    switch ($example1) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }
    switch ($example2) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }
    switch ($example3) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }

    switch ($example4) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }



    if ($total <= 25) {
        $final = "bad";
    } else {
        $final = "good";
    }


    switch ($final) {
        case 'bad':
            $msg = "please call the patient to find out for the bad evaluation " . $number = $_SESSION['number'];;
            break;

        default:
            $msg = "thanks";
            break;
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>

    <div class="form" style="width: 60%; margin: auto; margin-top: 50px;">
        <table class="table">
            <thead class="thead-warning">
                <tr style="
            background-color: orange;font-weight: bold;">
                    <th scope="col" style="
        width: 80%;">Question</th>
                    <th scope="col" style="text-align: center;">Result</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>are you satisfied with the level of cleanliness?</td>
                    <td style="text-align: center;"><?php if (isset($example))
                                                        echo $example ?></td>
                </tr>
                <tr>
                    <td>are you satisfied with the service prices?</td>
                    <td style="text-align: center;"><?php if (isset($example1))
                                                        echo $example1 ?></td>
                </tr>
                <tr>
                    <td>are you satisfied with the nurcing service?</td>
                    <td style="text-align: center;"><?php if (isset($example2))
                                                        echo $example2 ?></td>
                </tr>
                <tr>
                    <td>are you satisfied with the level of doctor?</td>
                    <td style="text-align: center;"><?php if (isset($example3))
                                                        echo $example3 ?></td>
                </tr>
                <tr>
                    <td>are you satisfied with the level of the calmness in the hospital?</td>
                    <td style="text-align: center;"><?php if (isset($example4))
                                                        echo $example4 ?></td>
                </tr>





            </tbody>

            <tfoot>
                <tr style="
            background-color: Orange;font-weight: bold;">
                    <td>TOTAL REVIEW</td>
                    <td style="text-align: center;"><?php if (isset($final)) echo $final ?></td>
                </tr>


            </tfoot>

        </table>
        <div style="
    width: 60%;
    margin: auto;
    text-align: center;
"><?php if (isset($msg))
        echo $msg ?></div>






        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>

</html>