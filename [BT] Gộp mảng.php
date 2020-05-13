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
    <input type="number" name="arrayLen1" placeholder="Độ dài mảng 1"><br>
    <input type="number" name="arrayLen2" placeholder="Độ dài mảng 2"><br>
    <input type="submit" value="Printf">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $arrayLen1= $_POST['arrayLen1'];
    $arrayLen2=$_POST['arrayLen2'];
    $array1 =[];
    $array2 = [];
    $arraySum = [];
    $arraySumLen = $arrayLen1 + $arrayLen2 ;
    echo "Mang 1: ";
    for($i=0;$i<$arrayLen1;$i++)
    {
        $array1[$i] = rand(0,100);
        echo $array1[$i]." ";
    }
    echo "<br>";
    echo "Mang 2: ";
    for($i=0;$i<$arrayLen2;$i++)
    {
        $array2[$i] = rand(0,100);
        echo $array2[$i]." ";
    }
    echo "<br>";
    echo "Mang sau khi gop la: ";
    for($i=0;$i<$arraySumLen;$i++)
    {
        if($i<$arrayLen1)
        {
            $arraySum[$i] = $array1[$i];
        }
        if($i>=$arrayLen1)
        {
            $arraySum[$i]=$array2[$i-$arrayLen1];
        }
        echo $arraySum[$i]." ";
    }
}
?>
</body>
</html>
