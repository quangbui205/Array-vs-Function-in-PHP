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
    <input type="number" name="numberCheck" placeholder="Nhập vào số kiểm tra">
    <input type="submit" value="Printf">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $numberArray = $_POST['numberArray'];
    $numberCheck=$_POST['numberCheck'];
    $array =[1,2,3,4,5,6,4,7,8,9];
    $countArr =0;
    $countNum =0;
//    for($i=0;$i<$numberArray;$i++)
//    {
//        $array[$i] = rand(0,100);
//        echo $array[$i]." ";
//    }
    echo "<br>";
    checkNum($array,$numberCheck,$countNum);
    if($countNum>0)
    {
        for($j=0;$j<$countNum;$j++)
        {
            for($i=0;$i < count($array)-1;$i++)
            {
                if($array[$i]== $numberCheck)
                {
                    $temp = $array[$i+1];
                    $array[$i+1] = $array[$i];
                    $array[$i] = $temp;
                }
            }
//            array_pop($array);
        }
    }
    else
    {
        echo "Khong co so can check"."<br>";
    }
    foreach ($array as $value)
    {
        echo $value." ";
    }
    function checkNum($arr,$num,$count)
    {
        for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i]==$num) $count++;
        }
        return $count;
    }
}
?>
</body>
</html>