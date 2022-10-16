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
<h1>Артикул</h1>
<?php
function articul($n) {
    printf("%06d",$n) ;
}
articul(25);
?>

<h1>Часы</h1>
<?php
function clock($sec) {
    $hour=floor($sec/3600);
    $min=floor(($sec-($hour*3600))/60);
    $secs=$sec-$hour*3600-$min*60;
    printf("Прошло $sec секунд с начала суток, сейчас время %02d:%02d:%02d",$hour,$min,$secs);
}
clock(100);
?>

<h1>ФИО</h1>
<?php
function name($last_name,$first_name,$second_name) {
    echo $last_name.' '. mb_substr($first_name,0,1).'. '.mb_substr($second_name,0,1).'.';
}
name('Козлова', 'Анастасия', 'Алексеевна');
?>

<h1>Короткий пароль</h1>
<?php
function password($pass) {
    if (mb_strlen($pass)<8){
        echo 'Слишком короткий пароль!';
    } else echo 'Хороший пароль!';
}
password('php');
?>

<h1>Пробел</h1>
<?php
function space($password){
    if (strstr($password,' ')){
        echo 'Пароль не должен содержать пробелов';
    } else echo 'Хороший пароль!';
}
space('p php');
?>

<h1>Ровно</h1>
<?php
function sravn($str1, $str2) {
    if (mb_strlen($str1)==mb_strlen($str2)){
        echo 'В переменных одинаковое количество символов';
    } else echo 'В переменных разное количество символов';
}
sravn('php','rnrq');
?>

<h1>Подробнее</h1>
<?php
function more($text) {
    if(mb_strlen($text) > 100){
        echo mb_substr($text, 0, 50)." <a href='#'>Подробнее</a>";
    }
    else{
        echo $text;
    }
}
more('PHP - C-подобный скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений.');

?>

<h1>Короче</h1>
<?php
function shorter($word) {
    if (mb_strlen($word) > 7){
        echo mb_substr($word, 0, 4).'-'.mb_substr($word, -2, 2);
    }
    else {
        echo $word;
    }
}
shorter('Обороноспособность');


?>

<h1>Коровы</h1>
<?php
function count_simv($str,$simv) {
    echo mb_substr_count($str, $simv);
}
count_simv('коровы', "о");
?>

<h1>Caps Lock</h1>
<?php
function Password_caps($str_pass){
    $password_qwerty = 'qwerty123';
    if($str_pass===$password_qwerty){
        echo 'Добро пожаловать!';
    }
    elseif ($str_pass===mb_convert_case($password_qwerty,MB_CASE_UPPER)){
        echo 'Возможно нажата клавиша Caps Lock!';
    }
    else{
        echo 'Ошибка';
    }
}
Password_caps('QWERTY123');
?>

<h1>Регистронезависимые коровы</h1>
<?php
function count_simv2($str3, $simv2){
    echo mb_substr_count(mb_convert_case($str3, MB_CASE_UPPER), mb_convert_case($simv2, MB_CASE_UPPER));
}
count_simv2('КоРОвы', "о");
?>

<h1>Курсив</h1>
<?php
function kursiv($str4, $word2){
    echo $str4."<br>";
    $word2=mb_convert_case($word2, MB_CASE_UPPER);
    $str4=str_replace($word2, "<i>$word2</i>", $str4);
    $word2=mb_convert_case($word2, MB_CASE_TITLE);
    $str4=str_replace($word2, "<i>$word2</i>", $str4);
    $word2=mb_convert_case($word2, MB_CASE_LOWER);
    $str4=str_replace($word2, "<i>$word2</i>", $str4);

    echo $str4;
}
kursiv('Привет, привет, ПРИВЕТ', 'привет');
?>

<h1>Тег</h1>
<?php
function tag($str5){
    $ind1=mb_stripos($str5,'>',0);
    $ind2=mb_stripos($str5,'<',-1);
    $len=mb_strlen($str5)-$ind2+$ind1;
    echo mb_substr($str5,$ind1+1,$len);
}
tag("<p>Lorem ipsum dolor.</p>");
?>

<h1>Без комментариев</h1>
<?php
function tag2($str6){
    echo mb_strstr($str6, ' ', true).mb_substr($str6, -2, 2);
}
tag2("/* Lorem ipsum dolor. */");
?>

<h1>Поиск</h1>
<?php
function search($text1,$key_word) {
    $arr=explode('.', $text1);
    for ($i=0; $i<count($arr);$i++) {
        if(strstr($arr[$i], $key_word)!==false){
            $text1=str_replace($arr[$i], "<i>$arr[$i]</i>", $text1);
            $text1=str_replace($key_word, "<b>$key_word</b>", $text1);
            break;
        }
    }
    echo $text1;
}
search('Мы зашли .  Там было неуютно. Поэтому пошли к Саше домой.', 'домой');
?>
</body>
</html>
