
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Assignment 2</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #1e293b;
            padding: 30px 20px;
        }

        .container {
            max-width: 1050px;
            margin: auto;
        }

        /* HEADER */

        .header {
            background: #2563eb;
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 15px;
            opacity: 0.9;
        }

        /* QUESTION */

        .question {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 22px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .question-title {
            background: #eff6ff;
            color: #2563eb;
            padding: 13px 16px;
            border-left: 4px solid #2563eb;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .question-title h2 {
            font-size: 20px;
        }

        h3 {
            margin: 18px 0 10px;
            color: #334155;
            font-size: 17px;
        }

        /* RESULT */

        .result {
            background: #f8fafc;
            padding: 16px;
            border-radius: 8px;
            margin-top: 12px;
            border: 1px solid #e2e8f0;
            line-height: 1.9;
        }

        .result strong {
            color: #2563eb;
        }

        .answer {
            color: #16a34a;
            font-weight: bold;
        }

        /* NUMBERS */

        .numbers {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .number {
            background: #eff6ff;
            color: #2563eb;
            padding: 9px 14px;
            border-radius: 7px;
            font-weight: bold;
            border: 1px solid #bfdbfe;
        }

        /* TABLE */

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }

        th {
            background: #2563eb;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 11px;
            border-bottom: 1px solid #e2e8f0;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        tr:hover {
            background: #eff6ff;
        }

        /* STATUS */

        .pass {
            color: #16a34a;
            font-weight: bold;
        }

        .fail {
            color: #dc2626;
            font-weight: bold;
        }

        /* FOOTER */

        footer {
            text-align: center;
            margin-top: 25px;
            padding: 15px;
            color: #64748b;
            font-size: 13px;
        }

        /* MOBILE */

        @media (max-width: 600px) {

            body {
                padding: 15px 10px;
            }

            .header {
                padding: 25px 15px;
            }

            .header h1 {
                font-size: 26px;
            }

            .question {
                padding: 18px;
            }

            .question-title h2 {
                font-size: 18px;
            }

            table {
                min-width: 650px;
            }
        }

    </style>

</head>

<body>

<div class="container">

    <!-- HEADER -->

    <div class="header">

        <h1>PHP Assignment 2</h1>

        <p>PHP & MySQL — Questions 1 to 5</p>

    </div>


    <!-- QUESTION 1 -->

    <div class="question">

        <div class="question-title">
            <h2>Question 1 — 1D Array</h2>
        </div>

        <?php

        $numbers = [10, 25, 8, 40, 15, 30, 5];

        ?>

        <h3>All Elements</h3>

        <div class="numbers">

            <?php

            foreach ($numbers as $number) {

                echo "<div class='number'>$number</div>";

            }

            ?>

        </div>


        <?php

        // Total

        $total = array_sum($numbers);


        // Even Total

        $evenTotal = 0;

        foreach ($numbers as $number) {

            if ($number % 2 == 0) {

                $evenTotal += $number;

            }

        }


        // Odd Total

        $oddTotal = 0;

        foreach ($numbers as $number) {

            if ($number % 2 != 0) {

                $oddTotal += $number;

            }

        }


        // Minimum

        $minimum = min($numbers);

        $minimumPosition = array_search($minimum, $numbers);


        // Maximum

        $maximum = max($numbers);

        $maximumPosition = array_search($maximum, $numbers);

        ?>


        <div class="result">

            <p>
                <strong>Total:</strong>
                <span class="answer">
                    <?php echo $total; ?>
                </span>
            </p>

            <p>
                <strong>Even Total:</strong>
                <span class="answer">
                    <?php echo $evenTotal; ?>
                </span>
            </p>

            <p>
                <strong>Odd Total:</strong>
                <span class="answer">
                    <?php echo $oddTotal; ?>
                </span>
            </p>

            <p>
                <strong>Minimum:</strong>
                <span class="answer">
                    <?php echo $minimum; ?>
                </span>
            </p>

            <p>
                <strong>Minimum Position:</strong>
                <?php echo $minimumPosition; ?>
            </p>

            <p>
                <strong>Maximum:</strong>
                <span class="answer">
                    <?php echo $maximum; ?>
                </span>
            </p>

            <p>
                <strong>Maximum Position:</strong>
                <?php echo $maximumPosition; ?>
            </p>

        </div>

    </div>


    <!-- QUESTION 2 -->

    <div class="question">

        <div class="question-title">
            <h2>Question 2 — 2D Associative Array</h2>
        </div>

        <?php

        $colors = [

            "Light" => [
                "Red" => 100,
                "Green" => 150,
                "Blue" => 200
            ],

            "Normal" => [
                "Red" => 150,
                "Green" => 200,
                "Blue" => 250
            ],

            "Dark" => [
                "Red" => 50,
                "Green" => 100,
                "Blue" => 150
            ]

        ];

        ?>

        <div class="table-container">

            <table>

                <tr>
                    <th>Type</th>
                    <th>Red</th>
                    <th>Green</th>
                    <th>Blue</th>
                </tr>

                <?php

                foreach ($colors as $type => $color) {

                    echo "<tr>";

                    echo "<td><strong>$type</strong></td>";

                    echo "<td>{$color["Red"]}</td>";

                    echo "<td>{$color["Green"]}</td>";

                    echo "<td>{$color["Blue"]}</td>";

                    echo "</tr>";

                }

                ?>

            </table>

        </div>

    </div>


    <!-- QUESTION 3 -->

    <div class="question">

        <div class="question-title">
            <h2>Question 3 — 3×3 Square Array</h2>
        </div>

        <?php

        $square = [

            [10, 21, 30],

            [41, 50, 61],

            [70, 81, 90]

        ];

        ?>

        <h3>Array</h3>

        <div class="table-container">

            <table>

                <?php

                foreach ($square as $row) {

                    echo "<tr>";

                    foreach ($row as $value) {

                        echo "<td><strong>$value</strong></td>";

                    }

                    echo "</tr>";

                }

                ?>

            </table>

        </div>


        <?php

        $oddTotal = 0;

        $evenTotal = 0;

        $grandTotal = 0;


        foreach ($square as $row) {

            foreach ($row as $value) {

                $grandTotal += $value;

                if ($value % 2 == 0) {

                    $evenTotal += $value;

                } else {

                    $oddTotal += $value;

                }

            }

        }

        ?>


        <div class="result">

            <p>
                <strong>Even Total:</strong>
                <span class="answer">
                    <?php echo $evenTotal; ?>
                </span>
            </p>

            <p>
                <strong>Odd Total:</strong>
                <span class="answer">
                    <?php echo $oddTotal; ?>
                </span>
            </p>

        </div>


        <h3>Row Totals</h3>

        <div class="result">

            <?php

            $rowNumber = 1;

            foreach ($square as $row) {

                $rowTotal = array_sum($row);

                echo "Row $rowNumber = <strong>$rowTotal</strong><br>";

                $rowNumber++;

            }

            ?>

        </div>


        <h3>Column Totals</h3>

        <div class="result">

            <?php

            for ($column = 0; $column < 3; $column++) {

                $columnTotal = 0;

                for ($row = 0; $row < 3; $row++) {

                    $columnTotal += $square[$row][$column];

                }

                echo "Column " . ($column + 1) .
                     " = <strong>$columnTotal</strong><br>";

            }

            ?>

        </div>


        <h3>Diagonal Totals</h3>

        <div class="result">

            <?php

            $diagonal1 = 0;

            $diagonal2 = 0;

            for ($i = 0; $i < 3; $i++) {

                $diagonal1 += $square[$i][$i];

                $diagonal2 += $square[$i][2 - $i];

            }

            echo "Main Diagonal = <strong>$diagonal1</strong><br>";

            echo "Second Diagonal = <strong>$diagonal2</strong>";

            ?>

        </div>


        <div class="result">

            <p>
                <strong>Grand Total:</strong>
                <span class="answer">
                    <?php echo $grandTotal; ?>
                </span>
            </p>

        </div>


        <?php

        $flatArray = [];

        foreach ($square as $row) {

            foreach ($row as $value) {

                $flatArray[] = $value;

            }

        }

        $minimum = min($flatArray);

        $maximum = max($flatArray);

        ?>

        <h3>Minimum & Maximum</h3>

        <div class="result">

            <p>
                <strong>Minimum:</strong>
                <span class="answer">
                    <?php echo $minimum; ?>
                </span>
            </p>

            <p>
                <strong>Maximum:</strong>
                <span class="answer">
                    <?php echo $maximum; ?>
                </span>
            </p>


            <?php

            foreach ($square as $rowIndex => $row) {

                foreach ($row as $columnIndex => $value) {

                    if ($value == $minimum) {

                        echo "Minimum Position: Row "
                            . ($rowIndex + 1)
                            . ", Column "
                            . ($columnIndex + 1)
                            . "<br>";

                    }

                }

            }


            foreach ($square as $rowIndex => $row) {

                foreach ($row as $columnIndex => $value) {

                    if ($value == $maximum) {

                        echo "Maximum Position: Row "
                            . ($rowIndex + 1)
                            . ", Column "
                            . ($columnIndex + 1)
                            . "<br>";

                    }

                }

            }

            ?>

        </div>

    </div>


    <!-- QUESTION 4 -->

    <div class="question">

        <div class="question-title">
            <h2>Question 4 — Student Information</h2>
        </div>

        <?php

        $students = [

            [
                "Student ID" => "ST001",
                "Name" => "Aamino",
                "Phone" => "0612345678",
                "Address" => "Mogadishu"
            ],

            [
                "Student ID" => "ST002",
                "Name" => "Ahmed",
                "Phone" => "0623456789",
                "Address" => "Hargeisa"
            ],

            [
                "Student ID" => "ST003",
                "Name" => "Fatima",
                "Phone" => "0634567890",
                "Address" => "Kismayo"
            ]

        ];

        ?>

        <div class="table-container">

            <table>

                <tr>

                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>

                </tr>

                <?php

                foreach ($students as $student) {

                    echo "<tr>";

                    echo "<td>{$student["Student ID"]}</td>";

                    echo "<td><strong>{$student["Name"]}</strong></td>";

                    echo "<td>{$student["Phone"]}</td>";

                    echo "<td>{$student["Address"]}</td>";

                    echo "</tr>";

                }

                ?>

            </table>

        </div>

    </div>


    <!-- QUESTION 5 -->

    <div class="question">

        <div class="question-title">
            <h2>Question 5 — Student Transcript</h2>
        </div>

        <?php

        $transcript = [

            [
                "Semester" => "Semester 1",
                "Course" => "PHP",
                "CW1" => 15,
                "MidTerm" => 20,
                "CW2" => 15,
                "Final" => 35
            ],

            [
                "Semester" => "Semester 1",
                "Course" => "MySQL",
                "CW1" => 18,
                "MidTerm" => 22,
                "CW2" => 16,
                "Final" => 30
            ],

            [
                "Semester" => "Semester 2",
                "Course" => "HTML",
                "CW1" => 17,
                "MidTerm" => 21,
                "CW2" => 18,
                "Final" => 32
            ]

        ];

        ?>

        <div class="table-container">

            <table>

                <tr>

                    <th>Semester</th>
                    <th>Course</th>
                    <th>CW1</th>
                    <th>MidTerm</th>
                    <th>CW2</th>
                    <th>Final</th>
                    <th>Total</th>
                    <th>Status</th>

                </tr>

                <?php

                foreach ($transcript as $student) {

                    $total =
                        $student["CW1"] +
                        $student["MidTerm"] +
                        $student["CW2"] +
                        $student["Final"];


                    if ($total >= 50) {

                        $status = "Pass";

                    } else {

                        $status = "Fail";

                    }


                    echo "<tr>";

                    echo "<td>{$student["Semester"]}</td>";

                    echo "<td><strong>{$student["Course"]}</strong></td>";

                    echo "<td>{$student["CW1"]}</td>";

                    echo "<td>{$student["MidTerm"]}</td>";

                    echo "<td>{$student["CW2"]}</td>";

                    echo "<td>{$student["Final"]}</td>";

                    echo "<td><strong>$total</strong></td>";


                    if ($status == "Pass") {

                        echo "<td class='pass'>$status</td>";

                    } else {

                        echo "<td class='fail'>$status</td>";

                    }

                    echo "</tr>";

                }

                ?>

            </table>

        </div>

    </div>


    <!-- FOOTER -->

    <footer>

        <p>PHP Assignment 2 • 2026</p>

    </footer>

</div>

</body>

</html>
```
