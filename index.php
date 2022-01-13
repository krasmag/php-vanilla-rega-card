<?php 
    include('views/partition/header.php');
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];
    if ($url == "/index.php") {
        header('Location: / ');
    }
    
?>

<?php

    //Подключение шапки
    $title = "Главная";

    require_once("views/partition/header.php");
    require_once("views/partition/navbar.php");

if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
    ?>
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://pro100ogorod.ru/wp-content/uploads/2019/08/zhelezo.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="https://traveltimes.ru/wp-content/uploads/2021/07/apple.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="https://avatars.mds.yandex.net/get-zen_doc/3384412/pub_600963fcfc8f1029f712193c_6009640471e18a0f6186c87f/scale_1200"></a>
    <a class="carousel-item" href="#four!"><img src="https://ayamama.ru/wp-content/uploads/2017/04/yabloki-mytye.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="http://magdos.su/wp-content/uploads/2020/05/яблоки-красные.jpg"></a>
  </div>
    <?
}

?>

<main>
    <?require_once("views/content.php");?>
</main>
<?php
    //Подключение подвала
    require_once("views/partition/footer.php");
?>