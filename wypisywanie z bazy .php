<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "zad 1 ";
    $conn = mysqli_connect('localhost', 'root', '', '');
    $q = "SHOW DATABASES";
    $r = mysqli_query($conn,$q);
    while($row = mysqli_fetch_array($r)){
        echo $row[0]."<br>";
    }
 echo "<br><br><br><br>zad2<br><br><br><br>";
    $conn1 = mysqli_connect('localhost', 'root', '', 'portal');
    $q1 = "SHOW TABLES";
    
    $r1 = mysqli_query($conn1,$q1);
    echo "<ol>";
    while($row1 = mysqli_fetch_array($r1)){
        echo "<li>".$row1[0]."</li>";
        $q2 = "SHOW COLUMNS FROM $row1[0]";
        $r2 = mysqli_query($conn1,$q2);
        echo "<ul>";
        while($row2 = mysqli_fetch_array($r2)){
            echo "<li>".$row2[0]."</li>";
        }
        echo "</ul>";
    }
    echo "</ol>";

echo "<br><br><br><br>zad3<br><br><br><br>";
    
    ?>
</body>
</html>