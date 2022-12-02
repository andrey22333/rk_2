<?php
$menu_list = ["Главная", "Магазин", "О нас"];
$menu_id = ["index.php", "magazin.php", "contact.php"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Comic street</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400;700&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body class="body_login">
    <?php require('components/header.php') ?>
    <main>
        <div class="form_body">
            <form class="form" name="test" method="post" action="home.php">
                <h1 class="form_title">Регистрация</h1>
                <div class="form_group">
                    <input class="form_input" type = "text" name="login" placeholder=" " >
                    <label class="form_label">Логин</label>
                </div>
                <div class="form_group">
                    <input class="form_input" type="password" name="password" placeholder=" ">
                    <label class="form_label">Пароль</label>
                </div>
                <input class="form_button" type="submit" value="Зарегистрироваться">
            </form>
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