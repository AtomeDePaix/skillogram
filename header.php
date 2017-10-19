<!DOCTYPE html>
<html>
    <head>
            <title>SkilloGram</title>
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8;" />
            <meta http-equiv="X-UA-Compatible" content="IE=10" />
            <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <a href=""><div id="logo"></div></a>
            <div class="menu-container">
                    <ul class="menu">
                        <li><a href="index.php">Лента</a></li>
                        <li><a href="Запись.php">Добавить запись</a></li>
                        <li><a href="О проекте.php">О проекте</a></li>
                    </ul>
            </div>
            <div class="search-form-container">
                    <form action="" method="post">
               	        <input type="text" placeholder="Поиск..." name="search" value="<?=@$_POST['search'];?>">
                        <input type="submit" value="OK">
                    </form>
            </div>
        </header>
