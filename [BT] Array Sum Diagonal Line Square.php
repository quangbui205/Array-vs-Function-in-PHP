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
    <input type="number" name="numSquare" placeholder="Độ dài cạnh hình vuông"><br>
    <input type="submit" value="Printf">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $numSquare= $_POST['numSquare'];
    $array =[];
    $sumDiagonal =0;
    for($i=0;$i<$numSquare;$i++)
    {
        $array[$i] = [];
        for($j=0;$j<$numSquare;$j++)
        {
            $array[$i][$j] = rand(0,100);
            echo $array[$i][$j]." ";
        }
        echo "<br>";
    }
    $max = $array[0][0];
    for($i=0;$i<$numSquare;$i++)
    {
        for($j=0;$j<$numSquare;$j++)
        {
            if($i==$j)
            {
                $sumDiagonal += $array[$i][$j];
            }
        }
    }
    echo "Tong cac phan tu tren duong cheo la: ".$sumDiagonal;
}
?>
</body>
</html>
