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
    <input type="submit" value="Printf">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $numCol= $_POST['numCol'];
    $numRow=$_POST['numRow'];
    $array =[];
    for($i=0;$i<$numRow;$i++)
        {
            $array[$i] = [];
            for($j=0;$j<$numCol;$j++)
            {
                $array[$i][$j] = rand(0,100);
                echo $array[$i][$j]." ";
            }
            echo "<br>";
        }
    $max = $array[0][0];
    for($i=0;$i<$numRow;$i++)
    {
        for($j=0;$j<$numCol;$j++)
        {
            if($max <= $array[$i][$j])
            {
                $max=$array[$i][$j];
                $indexCol = $j +1;
                $indexRow = $i +1;
            }
        }
    }
    echo "<br>". "Phan tu lon nhat la: ".$max." tai Hang thu: ".$indexRow." va tai Cot Thu ".$indexCol;
}
?>
</body>
</html>