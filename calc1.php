<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
// echo "this is".$num1." and".$num2.".";
$sum = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculator Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div class="result-box">

            <h1>Sample Calculator</h1>
            <h2>Result Summary</h2>

            <hr>

            <div class="row">
                <span>Number 1 :</span>
                <span><?php echo $num1; ?></span>
            </div>

            <div class="row">
                <span>Number 2 :</span>
                <span><?php echo $num2; ?></span>
            </div>

            <hr>

            <div class="row">
                <span>Addition = </span>
                <span><?php echo $sum; ?></span>
            </div>

            <div class="row">
                <span>Subtraction = </span>
                <span><?php echo $sub; ?></span>
            </div>

            <div class="row">
                <span>Multiplication = </span>
                <span><?php echo $mul; ?></span>
            </div>

            <div class="row">
                <span>Division = </span>
                <span><?php echo $div; ?></span>
            </div>

            <hr>

            <a href="calc.html" class="btn">Calculate Again</a>

        </div>
    </div>

</body>

</html>