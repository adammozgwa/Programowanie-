<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input name = "in1" type="text">
        <input name="in2" type="text">
        <button name="btn">przepisz</button>
    </form>
    <?php
    if(isset($_POST["btn"])){
        $in1 = $_POST["in1"];
        $in2 = $_POST["in2"];
        echo"<h1> $in1</h1>";
        echo"<p> $in2</p>";
    }
    ?>
</body>
</html>