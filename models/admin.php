<?php
require_once("../views/partition/header.php");
require_once("../views/partition/navbar.php");

?>
<main><h1>Добавить новый курс</h1>

<form action="adpost.php" method="POST">
  <div class="input-field">
    <input id="title" name="introduction" type="text" class="validate" required>
    <label for="title">Название</label>
    <span class="helper-text" data-error="Введите название"></span>
  </div>

  <div class="input-field">
    <input id="price" name="heading" type="text" class="validate" required min="1">
    <label for="price">Заголовок</label>
    <span class="helper-text" data-error="Введите название поста"></span>
  </div>

  <div class="input-field">
    <input id="img" name="img" type="text" class="validate" required>
    <label for="img">URL картинки</label>
    <span class="helper-text" data-error="Введите url картинки"></span>
  </div>

  <div class="input-field">
    <input id="content" name="content" type="text" class="validate" required>
    <label for="img">Основной контент</label>
    <span class="helper-text" data-error="Введите content"></span>
  </div>

  <button class="btn btn-primary">Добавить курс</button>
</form></main>

<?php
require_once("dbconnect.php");

require_once("../views/partition/footer.php");
?>