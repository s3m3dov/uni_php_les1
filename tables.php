<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <style>
        table {
            margin: 10px;
        }
        td {
            padding: 5px;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>These are tables!</h1>
</body>
</html>
<?php
    $num = 5;
    echo "<table border='1'";
    for ($i = 0; $i < $num; $i++) {
        echo "<tr>";
        // echo str_repeat("<td>1</td>", $num);
        for ($j = 0; $j < $num; $j++) {
            if ($i >= $j) {
                $str = "<td>x</td>";
            } else {
                $str = "<td>&nbsp;</td>";
            }
           echo $str;
        }
        echo "</tr>";
    }


    echo "</table>";
    echo "<table border='1'";
    for ($i = 0; $i < $num; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $num; $j++) {
            if (($i + $j) % 2 == 0) {
                $str = "<td>x</td>";
            } else {
                $str = "<td>&nbsp;</td>";
            }
           echo $str;
        }
        echo "</tr>";
    }
    echo "</table>";


    echo "</table>";
    echo "<table border='1'";
    for ($i = 0; $i < $num; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $num; $j++) {
            if (($i == $j) || ($i == ($num - $j -1))) {
                $str = "<td>x</td>";
            } else {
                $str = "<td>&nbsp;</td>";
            }
           echo $str;
        }
        echo "</tr>";
    }
    echo "</table>";
?>
