<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","salon_aut12345678");
        $q = "SHOW TABLES FROM DATABASE";
        $result = mysqli_query($conn,$q);
        echo "<select name='nazwa'>";
         while($row = mysqli_fetch_array($result)){
            echo "<option>$row[0]</option>";
         }
    
    ?>
</body>
</html>