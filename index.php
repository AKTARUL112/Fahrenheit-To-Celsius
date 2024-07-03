<?php

if($_POST){

    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32)*5/9;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Fahrenheit To Celsius in PHP</title>
    <style>

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f4f4f4;
        }


    div {
            padding:20px;
            max-width: 370px;
            height: 250px;
            background-color: #111;
            color: #fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div>
      <h1>Convert Fahrenheit To Celsius</h1>
    <form action="" method="post">
        Fahrenheit: <input type="text" name="fahrenheit"> <br><br>
    <?php
    if(isset($celsius)){
        echo "Celsius = " .$celsius;
    }
    ?>
    </form>
    </div>
</body>
</html>