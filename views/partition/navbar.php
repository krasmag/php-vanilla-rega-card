<?
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];
    $title = "Создать статью";
    ?>
<nav>
    
  <div class="nav-wrapper">
    <a href="#" class="brand-logo center"> На Яблоне</a>
    <ul class="left hide-on-med-and-down">
        <?php
        //Проверяем авторизован ли пользователь
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
        
            if ($url == "/") {
                echo "<li class='active'><a href='/'>Главная</a></li>";
            }else {
                echo "<li><a href='/'>Главная</a></li>";
            }
            if ($url == "/views/form_register.php") {
                echo "<li class='active'><a href='http://krasma31.beget.tech/views/form_register.php'>Регистрация</a></li>";
            }else {
                echo "<li><a href='http://krasma31.beget.tech/views/form_register.php'>Регистрация</a></li>";
            }
            if ($url == "/views/form_auth.php") {
                echo "<li class='active'><a href='http://krasma31.beget.tech/views/form_auth.php'>Авторизация</a></li>";
            }else {
                echo "<li><a href='http://krasma31.beget.tech/views/form_auth.php'>Авторизация</a></li>";
            }
        }else{
            if ($url == "/") {
                echo "<li class='active'><a href='/'>Главная</a></li>";
            }else {
                echo "<li><a href='/'>Главная</a></li>";
            }
            if ($url == "/models/admin.php") {
                echo "<li class='active'><a href='http://krasma31.beget.tech/models/admin.php'>Добавить статью</a></li>";
            }else {
                echo "<li><a href='http://krasma31.beget.tech/models/admin.php'>Добавить статью</a></li>";
            }
                echo "<li><a href='http://krasma31.beget.tech/models/logout.php'>Выход</a></li>";

            }
            

        ?>

    </ul>
    <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>| | |</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
<?php
        //Проверяем авторизован ли пользователь
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
        
            if ($url == "/") {
                echo "<li class='active'><a href='/'>Главная</a></li>";
            }else {
                echo "<li><a href='/'>Главная</a></li>";
            }
            if ($url == "/views/form_register.php") {
                echo "<li class='active'><a href='http://krasma31.beget.tech/views/form_register.php'>Регистрация</a></li>";
            }else {
                echo "<li><a href='http://krasma31.beget.tech/views/form_register.php'>Регистрация</a></li>";
            }
            if ($url == "/views/form_auth.php") {
                echo "<li class='active'><a href='http://krasma31.beget.tech/views/form_auth.php'>Авторизация</a></li>";
            }else {
                echo "<li><a href='http://krasma31.beget.tech/views/form_auth.php'>Авторизация</a></li>";
            }
        }else{
            if ($url == "/") {
                echo "<li class='active'><a href='/'>Главная</a></li>";
            }else {
                echo "<li><a href='/'>Главная</a></li>";
            }
            if ($url == "/models/admin.php") {
                echo "<li class='active'><a href='http://krasma31.beget.tech/models/admin.php'>Добавить статью</a></li>";
            }else {
                echo "<li><a href='http://krasma31.beget.tech/models/admin.php'>Добавить статью</a></li>";
            }
                echo "<li><a href='http://krasma31.beget.tech/models/logout.php'>Выход</a></li>";

            }
            

        ?>
</ul>
  </div>
</nav>


