<?php 
$menu_list = ["Главная", "Магазин", "О нас"];
$menu_id = ["index.php", "magazin.php", "contact.php"];
$menu_img = ["1.jpeg", "2.jpg", "3.jpg"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Comic street</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400;700&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body class="body">
    <?php require('components/header.php') ?>
    <main class="main_index">
        <img class="borderimg" src="img/slide1.jpg">
        <div class="bestsellers">
            <div class="bestsellers-zagl">Бесцеллеры</div>
            <div class="bestsellers-item">

            </div>
        </div>
        <div class="omag">
            <div class="omag-zagl">ИНТЕРНЕТ-МАГАЗИН КОМИКСОВ «COMIC STREET»</div>
            <div class="omag-item"><pre>
            Добро пожаловать! Мы продаем комиксы с 2010 года так что с нами вы в надежных руках. Сотни книг, фигурок и 
            сувениров уже ждут вас. Вы можете купить комиксы в одном из двух магазинов в Москве, либо сделать заказ 
            онлайн, и мы доставим его курьером, почтой или СДЭК по всей России. Удачных покупок! 
            </pre></div>
        </div>
    </main>
    <footer class="footer">
        <div>
            <p>8 (800) 100-60-19</p>
            <p>ООО «КОМИК СТРИТ»</p>
        </div>
    </footer>
</body>
</html>