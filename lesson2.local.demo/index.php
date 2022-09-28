<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Четное</h1>
<?php
function numb($x) {
    return $x%2==0 ? '1' : '0';
}
echo numb(5);
?>

<h1>Ход ладьи</h1>
<?php
function ladya($x1,$y1, $x2,$y2) {
    return $x1==$x2 || $y1 == $y2  ? 'True' : 'False';
}
echo ladya(4,2,4,5);
?>

<h1>Ход короля</h1>
<?php
function king($x1,$y1, $x2,$y2) {
    return $x1==$x2 || $y1 == $y2 || ($x1+1==$x2 && $y1+1==$y2) || ($x1-1==$x2 && $y1-1==$y2) ? 'True' : 'False';
}
echo king(4,2,5,3);
?>


<h1>Гость</h1>
<?php
$guest='nn';
if ($guest) {
    echo 'Пожалуйста авторизуйтесь!';
}
?>

<h1>Модуль</h1>
<?php
function modul($n) {
    if ($n<0) {
        $n*=(-1);
    }
    return $n;
}
echo modul(-3);
?>

<h1>Кто больше</h1>
<?php
function maximum($a,$b) {
    if ($a>$b){
        $b=$a;
    }
    return $b;
}
echo maximum(9,5);
?>

<h1>Черное и белое</h1>
<?php
function color($x1,$y1) {
    if ($x1%2==1 && $y1%2==0){
        return 'White';
    }
    else return 'Black';
}
echo color(4,2);
?>

<h1>Все четные</h1>
<?php
function all($a,$b,$c) {
    if ($a%2==0 && $b%2==0 && $c%2==0){
        return 'True';
    }
    else return 'False';
}
echo all(4,2, 3);
?>

<h1>Есть ли четные</h1>
<?php
function one($a,$b,$c) {
    if ($a%2==0 || $b%2==0 || $c%2==0){
        return 'True';
    }
    else return 'False';
}
echo one(2,7, 3);
?>

<h1>Выходной</h1>
<?php
function weekend($a) {
    if ($a==5 || $a==6){
        return 'Выходной';
    }
    else return 'Будни';
}
echo weekend(5);
?>


<h1>Треугольник</h1>
<?php
function triangle($a,$b,$c) {
    if ($a+$b>$c && $c+$b>$a && $a+$c>$b){
        return 'Треугольник существует';
    }
    else return 'Треугольник не существует';
}
echo triangle(4,9, 3);
?>

<h1>Високосный год</h1>
<?php
function year($a) {
    if (($a%4==0 && $a%100!==0) || $a%400==0){
        return 'Yes';
    }
    else return 'No';
}
echo year(1800);
?>

<h1>Знак</h1>
<?php
function sign($a) {
    if ($a>0){
        return 1;
    }
    else if ($a<0) {
        return -1;
    }
    else return 0;
}
echo sign(-34);
?>

<h1>Длинная соломинка</h1>
<?php
function solom($a,$b,$c) {
    if ($a> $b && $a>$c) {
        return $a;
    }
    else if ($b>$a && $b>$c) {
        return $b;
    }
    else return $c;
}
echo solom(4,9, 33);
?>

<h1>Сегодня холодно</h1>
<?php
function temp($a) {
    if ($a>=35){
        return'Пекло';
    }
    else if ($a>=25 && $a<35) {
        return "Жарко!";
    }
    else if ($a>=15 && $a<25) {
        return "Очень тепло!";
    }
    else if ($a>=5 && $a<15) {
        return "Тепло!";
    }
    else if ($a>=-10 && $a<5) {
        return "Не холодно!";
    }
    else if ($a>=-30 && $a<-10) {
        return "Сегодня холодно!";
    }
    else return "Оставайтесь дома!";
}
echo temp(39);
?>

<h1>Который час</h1>
<?php
function hour($h) {
    if ( $h%10==1 && $h%100!==11) {
        return $h.' час';
    }
    else if (($h%10==2 && $h%100!==12) || ($h%10==3 && $h%100!==13) || ($h%10==4 && $h%100!==14)) {
        return $h.' часа';
    }
    else return $h.' часов';
}
echo hour(191);
?>

<h1>Выходной 2</h1>
<?php
function week($n,$k)
{
    $c = $n + $k;
    if ($c % 6 == 5 || $c % 6 == 6 || $c % 6 == 0) {
        return 'monday';
    } else if ($c % 6 == 1) {
        return 'tuesday';
    } else if ($c % 6 == 2) {
        return 'wednesday';
    } else if ($c % 6 == 3) {
        return 'thursday';
    } else if ($c % 6 == 4) {
        return 'friday';
    }
}
echo week(0,6);
?>

<h1>Шоколадка</h1>
<?php
function choco($n,$m,$k){
    $p=($n*$m)-$k;
    if ($p%$n==0 || $p%$m==0) {
        return " таким образом можно отломить от шоколадки часть, состоящую ровно из $k долек";
    } else return 'нельзя';
}
echo choco(2,4,6);
?>

<h1>Ежедневник</h1>
<?php
function days($h_start_1, $m_start_1, $s_start_1, $h_finish_1, $m_finish_1, $s_finish_1,
              $h_start_2, $m_start_2, $s_start_2, $h_finish_2, $m_finish_2, $s_finish_2) {

    $event_start_1=$h_start_1*3600+$m_start_1*60+$s_start_1;
    $event_finish_1=$h_finish_1*3600+$m_finish_1*60+$s_finish_1;
    $event_start_2=$h_start_2*3600+$m_start_2*60+$s_start_2;
    $event_finish_2=$h_finish_2*3600+$m_finish_2*60+$s_finish_2;

    if (($event_start_1 <$event_start_2 and  $event_start_2<$event_finish_1) or ($event_start_1 <$event_finish_2 and  $event_finish_2<$event_finish_1) or ($event_start_2<$event_start_1 and  $event_start_1<$event_finish_2) or ($event_start_2 <$event_finish_1 and  $event_finish_1<$event_finish_2)) {

        return 'true';
    } else return 'false';
}

echo days(10,30,15,13,13,45,14,10,20,18,35,8);
?>

</body>
</html>