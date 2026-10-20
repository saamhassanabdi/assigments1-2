
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border: 1px solid #ddd;
        }

        h1 {
            text-align: center;
            color: white;
            background-color: #2563eb;
            padding: 15px;
            margin-top: 0;
        }

        .question {
            margin-top: 25px;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        .question-title {
            color: #2563eb;
            font-size: 24px;
            font-weight: bold;
            border-bottom: 1px solid #2563eb;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .answer {
            background-color: #f7f7f7;
            padding: 10px;
            margin-top: 8px;
            border-left: 3px solid #2563eb;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;
        }

        table td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: center;
        }

        table td:hover {
            background-color: #f0f4ff;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>PHP Assignment 1</h1>

    <?php

    // Question 1

    $a = 15;
    $b = 8;
    $c = 25;

    $greatest = $a;
    $smallest = $a;

    if ($b > $greatest) {
        $greatest = $b;
    }

    if ($c > $greatest) {
        $greatest = $c;
    }

    if ($b < $smallest) {
        $smallest = $b;
    }

    if ($c < $smallest) {
        $smallest = $c;
    }

    echo "
    <div class='question'>
        <div class='question-title'>Question 1</div>

        <div class='answer'>
            Greatest = $greatest
        </div>

        <div class='answer'>
            Smallest = $smallest
        </div>
    </div>
    ";


    // Question 2

    $number = 15;

    echo "
    <div class='question'>
        <div class='question-title'>Question 2</div>
    ";

    if ($number % 3 == 0 && $number % 5 == 0) {

        echo "
        <div class='answer'>
            $number is divisible by both 3 and 5.
        </div>
        ";

    } elseif ($number % 3 == 0) {

        echo "
        <div class='answer'>
            $number is divisible by 3.
        </div>
        ";

    } elseif ($number % 5 == 0) {

        echo "
        <div class='answer'>
            $number is divisible by 5.
        </div>
        ";

    } else {

        echo "
        <div class='answer'>
            $number is not divisible by 3 or 5.
        </div>
        ";
    }

    echo "</div>";


    // Question 3

    echo "
    <div class='question'>
        <div class='question-title'>Question 3</div>

        <strong>Odd numbers from 2 to 20:</strong>
        <div class='answer'>
    ";

    for ($i = 2; $i <= 20; $i++) {

        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }

    echo "
        </div>

        <br>

        <strong>Even numbers from 35 to 7:</strong>

        <div class='answer'>
    ";

    for ($i = 35; $i >= 7; $i--) {

        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }

    echo "
        </div>
    </div>
    ";


    // Question 4

    echo "
    <div class='question'>
        <div class='question-title'>Question 4</div>

        <div class='answer'>
    ";

    for ($i = 50; $i >= 2; $i--) {

        if ($i % 2 == 0 && $i % 5 == 0) {
            echo $i . " ";
        }
    }

    echo "
        </div>
    </div>
    ";


    // Question 5

    $number = 12345;
    $reverse = 0;
    $temp = $number;

    while ($temp > 0) {

        $digit = $temp % 10;

        $reverse = ($reverse * 10) + $digit;

        $temp = intdiv($temp, 10);
    }

    echo "
    <div class='question'>

        <div class='question-title'>Question 5</div>

        <div class='answer'>
            Original number = $number
        </div>

        <div class='answer'>
            Reverse number = $reverse
        </div>

    </div>
    ";


    // Question 6

    $num1 = 8;
    $num2 = 12;

    $lcm = ($num1 > $num2) ? $num1 : $num2;

    while (true) {

        if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
            break;
        }

        $lcm++;
    }

    echo "
    <div class='question'>

        <div class='question-title'>Question 6</div>

        <div class='answer'>
            LCM of $num1 and $num2 = $lcm
        </div>

    </div>
    ";


    // Question 7

    $num1 = 18;
    $num2 = 24;

    $hcf = 1;

    for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {

        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $hcf = $i;
        }
    }

    echo "
    <div class='question'>

        <div class='question-title'>Question 7</div>

        <div class='answer'>
            HCF of $num1 and $num2 = $hcf
        </div>

    </div>
    ";


    // Question 8

    echo "
    <div class='question'>

        <div class='question-title'>Question 8</div>

        <table>
    ";

    for ($i = 1; $i <= 12; $i++) {

        echo "<tr>";

        for ($j = 1; $j <= 12; $j++) {

            echo "<td>";
            echo $i * $j;
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "
        </table>

    </div>
    ";


    // Question 9

    $number = 17;
    $isPrime = true;

    if ($number < 2) {

        $isPrime = false;

    } else {

        for ($i = 2; $i < $number; $i++) {

            if ($number % $i == 0) {

                $isPrime = false;
                break;
            }
        }
    }

    echo "
    <div class='question'>

        <div class='question-title'>Question 9</div>
    ";

    if ($isPrime) {

        echo "
        <div class='answer'>
            $number is a Prime number.
        </div>
        ";

    } else {

        echo "
        <div class='answer'>
            $number is a Non-Prime number.
        </div>
        ";
    }

    echo "</div>";


    // Question 10

    echo "
    <div class='question'>

        <div class='question-title'>Question 10</div>

        <strong>Prime numbers from 10 to 50:</strong>

        <div class='answer'>
    ";

    for ($number = 10; $number <= 50; $number++) {

        $isPrime = true;

        if ($number < 2) {
            $isPrime = false;
        }

        for ($i = 2; $i < $number; $i++) {

            if ($number % $i == 0) {

                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo $number . " ";
        }
    }

    echo "
        </div>

    </div>
    ";

    ?>

</div>

</body>
</html>
