<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Купить товар</title>
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
                <a class="dropdown-item" href="LK.php">Перейти в личный кабинет</a>
                <a class="dropdown-item" href="#">Авторизация </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Выход из ЛК</a>
              </div>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
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
      <h1>        Для получения товара свяжитесь с продавцом в игре,а затем подтвердите получение товара в личном кабинете
     
      </h1>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auction";
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

//MySqli Select Query
//$results = $mysqli->query("SELECT ID_igra, ID_podk, Name_tovar, cost FROM tovar"); 
//values to be inserted in database table

//$Name_of_igra = 'Krakozyabra';
 
//product 1
$ID_tovar = '"'.$mysqli->real_escape_string('17').'"';

$Name_tovar = '"'.$mysqli->real_escape_string('Серебро').'"';
$ID_podk = '"'.$mysqli->real_escape_string('1').'"';
$ID_user1 = '"'.$mysqli->real_escape_string('1').'"';
$ID_user2 = '"'.$mysqli->real_escape_string('2').'"';
$cost= '"'.$mysqli->real_escape_string('95').'"';
$count= '"'.$mysqli->real_escape_string('1').'"';
$summa= '"'.$mysqli->real_escape_string('95').'"';

//Insert multiple rows
$insert = $mysqli->query("INSERT INTO deal(ID_tovar, Name_tovar, ID_user1, ID_user2, `data` , cost, `count`, summa) VALUES
($ID_tovar, $Name_tovar, $ID_user1, $ID_user2, NOW(), $cost, $count, $summa)");
$update = $mysqli->query('UPDATE user SET Balance=Balance-95 WHERE ID_user="2"');




// close connection
$mysqli->close();
?>
      <br>
      <h3 >  <a class="dropdown-item" href="Lk.php">Перейти в личный кабинет</a> </h3>
    </div>
    <div ng-app ng-init="checked = false">
				        <form class="form-signin" action="" method="post" name="form">
                        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>