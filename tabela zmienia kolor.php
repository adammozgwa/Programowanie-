<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
        #id1{
            background-color: black;
        }
    </style>
</head>
<body>
    <table>
    <?php
    for($i = 0;$i!=50;$i++){
        echo "<tr>";
        for($j = 0;$j!=50;$j++){
            $id = rand(1,2);
            echo '<td id ="id'.$id.'"></td>';
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>