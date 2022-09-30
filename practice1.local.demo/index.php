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
<h1>Задача 1</h1>
<?php
function check($num) {
    if ($num%2!==0) {
        return true;
    }
    else return false;
}
$count=0;
for ($i=100; $i>50; $i--) {
    if (check($i)) {
        echo "$i, ";
        $count++;
    }
}
echo "Всего $count нечетных чисел";
?>

<h1>Задача 2</h1>
<?php
function find() {
    $x=(15+(37*11))/(95+(21/2));
    return $x;
}
echo find();
?>

<h1>Задача 3</h1>
<?php
function calendar($count_day, $first_day) {
    $mas=[];
    for ($i=1; $i<=$count_day; $i++) {
        if ($i==1 or $i%7==1) {
            $mas[$i]=$first_day;
        } else if ($i==2 or $i%7==2) {
            $mas[$i]='Суббота';
        } else if ($i==3 or $i%7==3) {
            $mas[$i]='Воскресенье';
        } else if ($i==4 or $i%7==4) {
            $mas[$i]='Понедельник';
        } else if ($i==5 or $i%7==5) {
            $mas[$i]='Вторник';
        } else if ($i==6 or $i%7==6) {
            $mas[$i]='Среда';
        } else if ($i==7 or $i%7==0) {
            $mas[$i]='Четверг';
        }
    }
    print_r($mas);
}

calendar(31,'Пятница');
?>


</body>
</html>


