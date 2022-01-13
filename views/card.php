<?php
    //Подключение шапки

    include('partition/header.php');
    require_once("partition/header.php");
    require_once("partition/navbar.php");
    require_once("../models/dbconnect.php");
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];
    $id=$_GET['id'];
?>

<!-- Блок для вывода сообщений -->
<main>
    <?
  if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
    echo "<blockquote>Контент доступен только для авторизированных пользователей.</blockquote>";
}else {
$sql = "SELECT * FROM `card` WHERE `id` = $id";
// Отправляем запрос;
$res = $mysqli -> query($sql);
  // Условие делаем для проверки, есть ли вообще что то в этой таблице;
  if ($res -> num_rows > 0) {
      // Цикл будет работать пока не пройдёт все строки;
      // При каждой новой итерации цикла,
      // Он переходит на новое значение;
      $row = $res -> fetch_assoc();
        // Вывод на экран;?>
    <div id="container1"  class="row">

        <div id="#cardcard" style="float: none;   margin: 0 auto;" class="col s9">
            <div class="card">
                <div class="card-image">
                    <img src="<? echo " {$row["img1"]}"?>">

                </div>
                <div class="card-content">
                    <p>
                        <? echo " {$row["content1"]}"?>
                    </p>
                </div>
            </div>
        </div>
        <div id="#cardcard" style="float: none;   margin: 0 auto;" class="col s9">
            <div class="card">
                <div class="card-image">
                    <img src="<? echo " {$row["img2"]}"?>">
                </div>
                <div class="card-content">
                    <p>
                        <? echo " {$row["content2"]}"?>
                    </p>
                </div>
            </div>
        </div>
        <div id="#cardcard" style="float: none;   margin: 0 auto;" class="col s9">
            <div class="card">
                <div class="card-image">
                    <img src="<? echo " {$row["img3"]}"?>">
                </div>
                <div class="card-content">
                    <p>
                        <? echo " {$row["content3"]}"?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?
      
    // Если таблица пустая, будет выведено "Данных нет";
    } else {
      echo "Данных нет";
    }
}
?>
    </div>
</main>
<?php
    //Подключение подвала
    require_once("partition/footer.php");
?>