<?
  if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
    echo "<blockquote>Контент доступен только для авторизированных пользователей.</blockquote>";
}else {
?>
<div class="row">
  <?php
require_once("models/dbconnect.php");
$sql = "SELECT * FROM `content`";
// Отправляем запрос;
$res = $mysqli -> query($sql);
  // Условие делаем для проверки, есть ли вообще что то в этой таблице;
  if ($res -> num_rows > 0) {
      // Цикл будет работать пока не пройдёт все строки;
      // При каждой новой итерации цикла,
      // Он переходит на новое значение;
      while ($row = $res -> fetch_assoc()) {
        // Вывод на экран;?>


    <div class="col s3" id="coll">
    <?php echo '<a id="krasmag" href="views/card.php?id='.$row['id'].'">'.$row['title'];?>
 <!-- //<a id="krasmag" href="views/card.php?id="> <?echo"{$row["id"]}"?>-->
      <div class="card">
        <div class="card-image">
          <img src="<? echo " {$row["IMG"]}"?>" alt="
          <?  echo "{$row["heading"]}"?>">
        </div>
        <div class="card-content">
          <span class="price">
            <?  echo "{$row["introduction"]}"?></span>
          <p class="card-title">
            <? echo "{$row["heading"]}"?>
          </p>
        </div>
        <div class="card-action actions">
          <p>
            <? echo "{$row["content"]}"?>
          </p>
        </div>
      </div>
    </div>
  </a>

  <?
      }
      
    // Если таблица пустая, будет выведено "Данных нет";
    } else {
      echo "Данных нет";
    }
}
?>
</div>