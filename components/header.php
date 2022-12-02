<header>
    <div class="header">
        <div class="nav">
            <div><a href="index.php"><img src="img/logo.png" width=200></a></div>
            <?php for ($i = 0; $i < count($menu_list); $i++): ?>
            <div class="nav-item"><a href=<?php echo $menu_id[$i]?>><?php echo $menu_list[$i] ?></a></div>
            <?php endfor?>
        </div>
        <div class="nav">
            <div class="nav-item"><a href=<?php 
                $link = "login.php";
                $link_title = "Вход";
                echo $link
            ?>><?php echo $link_title ?></a></div>
            <div class="nav-item"><a href=<?php 
                $link = "registr.php";
                $link_title = "Регистрация";
                echo $link
            ?>><?php echo $link_title ?></a></div>
    </div>
</header>