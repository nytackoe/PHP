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
<h1>Просто</h1>
<?php
$array=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => 88
];
print_r($array);
?>

<h1>Поиск данных</h1>
<?php
$array_next=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => 88
];
$key='Маvша';
if(isset($array_next[$key])){
    echo $array_next[$key];
} else {
    echo 'Данные не найдены';
}
?>

<h1>Глоссарий</h1>
<?php
$array_gloss=[
    'Лабиринт'=>'Запутанная сеть дорожек, ходов, сообщающихся друг с другом помещений',
    'Лаборант'=>'Научно-технический сотрудник лаборатории, научного учреждения',
    'Лава'=>'Расплавленная минеральная масса, изливающаяся из вулкана при извержении'
];

$word_gloss='Лабиринт';
if(isset($array_gloss[$word_gloss])){
    echo $word_gloss.' - '.$array_gloss[$word_gloss];
} else {
    echo 'Данные не найдены';
}
?>

<h1>Выше крыши</h1>
<?php
$array_rate=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => 88,
    'Юрий'=>120
];
$name='Юрий';
if ($array_rate[$name]>100) {
    $array_rate[$name]=100;
    echo $name.' - '.$array_rate[$name];
}
?>

<h1>Данила Мастер</h1>
<?php
$array_rate1=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => 88,
    'Юрий'=>41
];
$user='Юрий';
if ($array_rate1[$user]>0 && $array_rate1[$user]<=31 ){
    echo 'новичок';
} elseif ($array_rate1[$user]>31 && $array_rate1[$user]<=60 ){
    echo 'мастер';
} elseif ($array_rate1[$user]>=61){
    echo 'грандмастер';
}
?>


<h1>Рейтинг +1</h1>
<?php
$array_rate2=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => 88
];
$user1='Маша';
if(isset($array_rate2[$user1])){
    $array_rate2[$user1]=$array_rate2[$user1]+1;
    echo $user1.' - '.$array_rate2[$user1];
} else {
    $array_rate2[$user1]=0;
    echo $user1.' - '.$array_rate2[$user1];
}
?>

<h1>Бан</h1>
<?php
$array_rate3=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => -2
];
$username='Маша';
echo $username.' - '.$array_rate3[$username].PHP_EOL;
if ($array_rate3[$username]<0) {
    unset($array_rate3[$username]);
}
print_r($array_rate3);
?>

<h1>Файл</h1>
<?php
$dir='C:\\Windows\\Dirname\\file.txt';

$folder=explode("\\",$dir);
$filename=$folder[count($folder)-1];
unset($folder[count($folder)-1]);
$foldname=implode("\\",$folder);

echo "Имя файла: $filename".PHP_EOL;
echo "Папка: $foldname".PHP_EOL;
?>


<h1>Царь горы</h1>
<?php
$array_rate4=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Сережа'=> 95,
    'Света'=> 48,
    'Маша' => -2
];
arsort($array_rate4);
$output_first=array_slice($array_rate4, 0, 1);
$output = array_slice($array_rate4, 0, 3);
print_r($output_first);
print_r($output);
?>

<h1>День недели</h1>
<?php
$week_rus=['понедельник', 'вторник', 'среда', 'четверг', 'пятница' , 'суббота', 'воскресенье'];
$week_eng=['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
$text_week='monday - первый день недели, tuesday - второй день недели, wednesday - третий день недели, thursday - четвертый день недели, friday - пятый день недели, saturday - шестой день недели, sunday - седьмой день недели';
echo str_replace($week_eng,$week_rus,$text_week);
?>

<h1>Лето</h1>
<?php
$year=[
    'Январь'=> 'Зима',
	'Февраль'=> 'Зима',
	'Март'=> 'Весна',
	'Апрель'=> 'Весна',
	'Май'=> 'Весна',
	'Июнь'=> 'Лето',
	'Июль'=> 'Лето',
	'Август'=> 'Лето',
	'Сентябрь'=> 'Осень',
	'Октябрь'=> 'Осень',
	'Ноябрь'=> 'Осень',
    'Декабрь'=> 'Зима'
];
$month='Июль';
echo $month.' - '.$year[$month];
?>

<h1>Корзина</h1>
<?php
$cart = [
    13 => ['name'=>'Кеды', 'count'=>2, 'price'=>123],
    28 => ['name'=>'Самолет', 'count'=>1, 'price'=>9999999]
];

$id=28;
$item=$cart[$id];
echo $item['price'];
?>
</body>
</html>
