<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="numCol" placeholder="Số hàng của mảng"><br>
    <input type="number" name="numRow" placeholder="Số cột của mảng"><br>
    <input type="number" name="valueCol" placeholder="Vị trí Cột muốn tính"><br>
    <input type="submit" value="Printf">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $numCol = $_POST['numCol'];
    $numRow = $_POST['numRow'];
    $valueCol = $_POST['valueCol'];
    $sum = 0;
    $array = [];
    for ($i = 0; $i < $numRow; $i++) {
        $array[$i] = [];
        for ($j = 0; $j < $numCol; $j++) {
            $array[$i][$j] = rand(0, 100);
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }
    for ($i = 0; $i < $numRow; $i++) {
        $sum += $array[$i][$valueCol-1];
    }
    echo "<br>" . "Tong tai cot thu " . $valueCol . " cua mang la: " . $sum;
}
?>
</body>
</html>
