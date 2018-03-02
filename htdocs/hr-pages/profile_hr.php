<?php session_start(); include("../connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="icon" href="../favicon.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <header><!-- start header -->
    <div class="main-menu"> <!-- главное меню -->
      <div class="container">
        <nav class="navbar row">
          <div class="col col-10">
          <ul class="row">
            <li class="logo col col-3"><a href="#"><img src="../img/logo.svg"></a></li>
            <li class="nav-item col col-2"><a href="#">О системе</a></li>
            <li class="nav-item col col-2"><a href="#">Поддержка</a></li>
            <li class="social col col-2">
              <div><a href="#"><img src="../img/github.svg"></a></div>
              <div><a href="#"><img src="../img/vk.svg"></a></div>
            </li>
            <li class="profile col col-3">
              <div class="avatar-hello">
                <div class="avatar-image"><?php echo ("<img src='../".$_SESSION['img']."'>"); ?></div>
                <div><p style="margin: 0;">Привет, <?php echo $_SESSION['imy'] ?>!<br>
                  <a href="../php/logout.php">Log Out</a></p></div>
              </div>
            </li>
          </ul>
        </div>
        </nav>
      </div>
    </div>
  </header><!-- end header -->

  <div class="sidebar"><!-- start sidebar -->
    <ul class="block-links">
      <li><a href="../hr-pages/profile_hr.php">Профиль</a></li>
      <li><a href="#">Календарь</a></li>
      <li><a href="#">Задания</a></li>
      <li><a href="#">Рейтинг</a></li>
    </ul>
  </div><!-- end sidebar -->

  <div class="container"><!-- start main content -->
    <div class="row wrapper">     
      <div class="col col-10">
        <h2>Здравствуйте, <?php echo $_SESSION['fam']." ".$_SESSION['imy'];?>!</h2>
        <p class="company">Ваша компания: 
            <?php 
              $query=mysql_query("SELECT name_comp FROM company WHERE id_comp='".$_SESSION['id_company']."'");
              $comm=mysql_fetch_array($query);
              echo $comm['name_comp'];
              unset($query);
              unset($comm);
            ?>  
        </p>
        <article class="hr-funct">
          <p>Вы зарегистрированы как руководитель, поэтому вам доступны следующие функции:</p>
          <p>- Проверка заявок пользователей в компанию<br>
            <span class="attention">Внимание: пользователь не сможет зайти в систему, пока не получит ваше подтверждение</span>
          - Назначение пользователям прав руководителя<br>
          - Создание новых ачивок для ваших работников<br> 
          - Присуждение наград работникам<span class="red">*</span><br> 
          - Добавление, изменение и удаление событий в календаре (будут видны всем пользователям)</p>
        </article>
        <div class="btn-group row">
          <button class="col col-5 btn-green">Заявки</button>
          <button class="col col-5 btn-yellow">Создать новую ачивку</button>
        </div>
        <p><span class="red">*</span>Чтобы добавить награду работнику, перейдите в его профиль на странице рейтинга.</p>
      </div><!-- end col-10 -->
    </div><!-- end row -->
  </div><!-- end main content -->

  <footer><!-- start footer -->
    <div class="container"> 
      Copyright (c) Just for Bonch 2018
    </div>
  </footer><!-- end footer -->
    
  </div>
<script data-rocketsrc="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/script.js"></script>
</body>
</html>