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
<form method = 'post'>
    <input type="number" name="numberArray" placeholder="Nhập vào đô dài của mảng">
    <input type="submit" value="Printf">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $numberArray = $_POST['numberArray'];
    $array =[];
    for($i=0;$i<$numberArray;$i++)
    {
        $array[$i] = rand(0,100);
    }
    foreach ($array as $value)
    {
        echo $value." ";
    }
    echo "<br>";
    $min = $array[0];
    for($i=0;$i<$numberArray;$i++)
    {
        if($min>=$array[$i])
        {
            $min = $array[$i];
        }
    }
    echo $min;
}
?>
</body>
</html>