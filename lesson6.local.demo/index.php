
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
<h1>Гость</h1>
<form action="index.php" method="get">
<input type="text" name="username" placeholder="Имя" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>

<?php
if (isset($_GET['username'])){
    echo 'Здравствуйте,'.$_GET['username'];
} else {
    echo 'Введите имя';
}

?>


<h1>Снова глоссарий</h1>
<!--index.php?term=Лава -->
<?php
$terms=[
    'Лабиринт'=>'Запутанная сеть дорожек, ходов, сообщающихся друг с другом помещений',
    'Лаборант'=>'Научно-технический сотрудник лаборатории, научного учреждения',
    'Лава'=>'Расплавленная минеральная масса, изливающаяся из вулкана при извержении'
];
//echo 'Введите в запрос слово';
if (isset($_GET['term'])){
    echo $terms[$_GET['term']];
}

?>

<h1>О нас</h1>
<?php
$route=[
  'home'=>['title'=> 'Главная',
            'content'=> 'Это текст главной страницы'],
  'about'=>['title'=> 'О нас',
            'content'=> 'Это текст страницы с информацией о деятельности владельцев сайта'],
  'contacts'=>['title'=>'Контакты',
      'content'=>'Это текст страницы с контактами владельцев'],
    'news'=>['title'=>'Новости',
        'content'=>'Это текст страницы с новостями']
];
?>
<ul>
    <?php foreach ($route as $key=>$value) :?>
    <li><a href="index.php?page=<?php echo $key ;?>"><?php echo $value['title'] ;?></a></li>
        <?php
        if (isset($_GET['page']) && $_GET['page']==$key){
            echo $value['content'];
        }
        ?>
    <?endforeach;?>
</ul>

<h1>Опять глоссарий</h1>
<?php
$text='Лаборант работает, Лава течет, Лабиринт запутывает';
$words=['Лава', 'Лаборант', 'Лабиринт'];
$words_url=[];
foreach ($words as $val){
    array_push($words_url,"<a href=\"index.php?term=$val\"> $val </a>");
}
$text_url=str_replace($words, $words_url,$text);
echo $text_url;
if (isset($_GET['term'])){
    echo "<br>".$terms[$_GET['term']];
}
?>

<h1>Калькулятор</h1>
<form action="index.php" method="get">
    <input type="number" name="metres" placeholder="Кв.м." /><br />
    <input type="number" name="vat" placeholder="Вт." /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>
<?php
if (isset($_GET['metres']) && isset($_GET['vat'])){
    $sections=($_GET['metres']*100)/$_GET['vat'];
    echo '<br>'.$sections.' секций радиатора необходимо';

}
?>


<h1>Подсветка</h1>
<form action="index.php" method="get">
    <input type="text" name="user_text" placeholder="Введите текст" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>
<?php
$new_text='Прекрасная и чудесная пора – осень. Она дарит последние теплые дни в году, окрашивает все вокруг в удивительные и сказочные цвета.';
if (isset($_GET['user_text'])){
    $text_item=$_GET['user_text'];
    $another_text=str_replace($text_item,"<i style='color: red'>$text_item</i>",$new_text);

    echo $another_text;
}
?>
</body>
</html>
