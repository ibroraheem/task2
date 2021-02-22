<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    <style>
    body{
        color: blue;
    }
    h1{
        color: black;
    }
    </style>
</head>
<body>
<h1>Generated Recharge Pins</h1>
<?php
$digits = 16;
$count = 0;
while ($count < 200) {
    echo rand(pow(10, $digits-1), pow(10, $digits)-1) . "<br/>";
    $count++;
}
?> 
</body>
</html>