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

<h1>Слава КПСС</h1>
<?php
$amount=6;
for ($i=0;$i<$amount;$i++){
    echo "Слава КПСС \n";
}
?>

<h1>Абзац</h1>
<?php
$amount_absac=5;
for ($i=1;$i<=$amount_absac;$i++){
    echo "<p> Абзац $i</p> ";
}
?>

<h1>Половина</h1>
<?php
$day=0;
$summa_a=100;
$summa_b=30;
while ($summa_a>$summa_b){
    $summa_a=$summa_a/2;
    $day++;
}
echo $day;
?>

<h1>Кто есть кто</h1>
<?php
$array_rate=[
    'Вася'=> 37,
    'Даша' => 56,
    'Коля'=> 18,
    'Маша' => -2,
    'Юрий'=>120
];
?>
<table >
    <thead>
    <th>Name</th>
    <th>Rate</th>
    </thead>
    <tbody>
    <?php foreach ($array_rate as $key=> $value): ?>
        <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo  $value; ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>

<h1>Весь рейтинг</h1>
<?php
$rate_summa=0;
foreach ($array_rate as $value){
    $rate_summa+=$value;
}
echo $rate_summa;
?>

<h1>Средняя по больнице</h1>
<?php
$rate_count=0;
foreach ($array_rate as $value){
    if ($value!=0){
        $rate_count++;
    }
}
echo $rate_middle=$rate_summa/$rate_count;
?>

<h1>Выше крыши 2</h1>
<?php
foreach ($array_rate as &$value){
    if ($value > 100){
        $value=100;
    }
}
?>
<table >
    <thead>
    <th>Name</th>
    <th>Rate</th>
    </thead>
    <tbody>
    <?php foreach ($array_rate as $key=> $item): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo  $item; ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>


<h1>Второе дно</h1>
<?php
foreach ($array_rate as &$value){
    if ($value < 0){
        $value=0;
    }
}
?>
<table >
    <thead>
    <th>Name</th>
    <th>Rate</th>
    </thead>
    <tbody>
    <?php foreach ($array_rate as $key=> $item): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo  $item; ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>



<h1>Экватор</h1>
<table >
    <thead>
    <th>Name</th>
    <th>Rate</th>
    </thead>
    <tbody>
    <?php foreach ($array_rate as $key=> $item): ?>
    <?php if ($item>50): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo  $item; ?></td>
        </tr>
    <?php endif;?>
    <?php endforeach; ?>
    </tbody>
</table>


<h1>Данила Мастер 2</h1>
<table >
    <thead>
    <th>Name</th>
    <th>Rate</th>
    <th>Status</th>
    </thead>
    <tbody>
    <?php foreach ($array_rate as $key=> $item): ?>
        <?php if ($item<=30): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo  $item; ?></td>
                <td>новичок</td>
            </tr>
        <?php elseif ($item<=60 && $item>30) : ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo  $item; ?></td>
                <td>мастер</td>
            </tr>
        <?php elseif ($item>=61) : ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo  $item; ?></td>
                <td>грандмастер</td>
            </tr>
        <?php endif;?>
    <?php endforeach; ?>
    </tbody>
</table>


<h1>Выйди вон</h1>
<?php
$users1=['Вася', 'Даша', 'Коля', 'Маша', 'Юрий'];
$users2=['Саша', 'Даша', 'Миша', 'Маша', 'Леша'];
foreach ($users1 as $key=>$user1) {
    if (in_array($user1,$users2)){
        unset($users1[$key]);
    }
}
print_r($users1);
?>

<h1>Зебра</h1>
<?php
$row_count=5;
?>
<table >
    <tbody>
    <?php for ($i=1; $i<=$row_count; $i++): ?>
        <?php if ($i%2==0): ?>
            <tr style="background-color: black; color: white">
                <td><?php echo $i; ?></td>
            </tr>
        <?php elseif ($i%2==1) : ?>
            <tr style="background-color: white; color: black">
                <td><?php echo $i; ?></td>
            </tr>

        <?php endif;?>
    <?php endfor; ?>
    </tbody>
</table>


<h1>Меню</h1>
<?php
$pages = ['О нас'=>'about.html', 'Главная'=>'main.html', 'Контакты'=>'contacts.html', 'Загрузки'=>'downloads.html']
?>
<ul>
    <?php foreach ($pages as $key_page=>$page):?>
    <li style="list-style: none"><a href="<?php echo $page ;?>">
            <?php echo $key_page ;?>
        </a></li>
    <?php endforeach;?>
</ul>

<h1>Меню 2</h1>
<?php
$pages = ['О нас'=>'about.html', 'Главная'=>'main.html', 'Контакты'=>'contacts.html', 'Загрузки'=>'downloads.html'];
$page='Главная'
?>
<ul>
    <?php foreach ($pages as $key_page=>$page_name):?>
        <?php if($key_page==$page):?>
        <li style="list-style: none"><a  href="<?php echo $page_name ;?>" style="color: green">
                <?php echo $key_page ;?>
            </a></li>
        <?php else:?>
            <li style="list-style: none"><a href="<?php echo $page_name ;?>">
                    <?php echo $key_page ;?>
                </a></li>
        <?php endif;?>
    <?php endforeach;?>
</ul>


<h1>Итог</h1>
<?php
$cart = [
    13 => ['name'=>'Кеды', 'count'=>2, 'price'=>123],
    28 => ['name'=>'Самолет', 'count'=>1, 'price'=>9999999]
];
$summa=0;
?>
<table >
    <thead>
    <th>Name</th>
    <th>Count</th>
    <th>Price</th>
    <th>Summa</th>
    </thead>
    <tbody>
    <?php foreach ($cart as $id=> $cart_item): ?>
        <tr>
            <td><?php echo $cart_item['name'] ;?></td>
            <td><?php echo $cart_item['count'] ;?></td>
            <td><?php echo $cart_item['price'] ;?></td>
            <td><?php echo $cart_item['price']*$cart_item['count'] ;
            $summa+=$cart_item['price']*$cart_item['count']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p>Стоимость корзины: <?php echo $summa ;?></p>



<h1>Шах</h1>
<table>
    <?php for($i=0; $i<8; $i++): ?>
    <?php if($i%2==0):?>
    <tr>
        <?php for($j=0; $j<8; $j++): ?>
            <?php if($j%2==0):?>
                <td style="background-color: black; width: 5px; height: 5px; border: 1px solid black">    </td>
            <?php elseif($j%2==1):?>
                <td style="background-color: white; width: 5px; height: 5px; border: 1px solid black">    </td>
            <?php endif;?>

        <?php endfor; ?>
    </tr>
    <?php elseif($i%2==1):?>
    <tr>
        <?php for($j=0; $j<8; $j++): ?>
            <?php if($j%2==0):?>
                <td style="background-color: white; width: 5px; height: 5px; border: 1px solid black">    </td>
            <?php elseif($j%2==1):?>
                <td style="background-color: black; width: 5px; height: 5px; border: 1px solid black">    </td>
            <?php endif;?>

        <?php endfor; ?>
    </tr>
        <?php endif;?>
    <?php endfor; ?>
</table>
</body>
</html>
