<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Добавление товара</title>
      <link rel="stylesheet" href="css/style3.css">
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.js">  </script>
    <nav class="navbar navbar-expand-lg fixed-top">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Index.php">Главная </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">О нас</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Личный кабинет
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Перейти в личный кабинет</a>
                <a class="dropdown-item" href="#">Авторизация </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Выход из ЛК</a>
              </div>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="Games/search.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Введите название игры" aria-label="Search">
            <button class="btn btn-warning " type="submit">Поиск</button>
          </form>
        </div>
      </nav>
      
      
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="frame">
    <div class="nav">
      <h1>        Опишите товар, который хотите продать :</h1>
    </div>
    
                       
                <div class="table" >

<h5> Игра:</h5>
<select  name="Addigr" value="">
  <option value="1">Lineage2</option>
  <option value="2">Bless Online</option>
  <option value="3">Black Desert</option>
</select>
<br>
<h5> Категория:</h5>
 <select  name="Addcat" value="">
  <option value="1">Серебро</option>
  <option value="2">Аккаунты</option>
  <option value="3">Услуги</option>
</select><br> 
<h5> Название товара: </h5>
 <input type="text" name="Addnazv" value=""><br>
 <h5> Цена:</h5>
 <input type="text" name="Addcost" value=""><br>
 <br>

<form class="form-inline my-2 my-lg-0" method="POST" action="Add.php">
<button class="btn btn-success" type="submit">
            Выставить на продажу</button>
            <?php

//$Addigr = $_POST['Addigr']; 
//$Addcat = $_POST['Addcat'];
//$Addnazv = $_POST['Addnazv']; 
//$Addcost = $_POST['Addcost'];

?>
          </form>
          </div>

          
				        
      
           
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
