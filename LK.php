<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Личный кабинет</title>
      <link rel="stylesheet" href="css/style3.css">
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/bootstrap.js">  </script>
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
            <li class="nav-item">
              <a class="nav-link" href="LK.php">Личный кабинет</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><font color="#ec4f11">Ваш баланс: <br> 
            <?php
             $dbhost = 'localhost';
             $dbuser = 'root';
             $dbpass = '';
             $dbname = 'auction';
             $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
             if(! $conn ) {
              die('Could not connect: ' . mysqli_error());
           }
         
           $sql = 'SELECT user.Balance from user WHERE ID_user="2"';
           if($result = mysqli_query($conn, $sql)) {
            
              // echo "<table>";
               echo "<tr>";
               echo "<th></th>";
              
               echo "</tr>";
               
               while($row = mysqli_fetch_array($result)){
                 // echo "<tr>";
                  echo "<td>" . $row['Balance'] . "</td>"; } }
            mysqli_close($conn);
            
            ?>
             р.</button>
          </form>
          <form class="form-inline my-2 my-lg-0" action="Logout.php">
            
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><font color="#ec4f11">Выход</button>
          </form>
        </div>
      </nav>

  
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="frame">
    <div class="nav">
      <h1>        Ваши сделки</h1>
      </div>
      <div class="table" >
    <?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'auction';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   $user='2';
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
 
   $sql = 'SELECT igra.Name_of_igra, tovar.Name_tovar, user.name, tovar.data, deal.summa, deal.status, deal.comment FROM igra
    LEFT JOIN tovar ON igra.ID_igra = tovar.ID_igra
    LEFT JOIN deal ON tovar.Name_tovar = deal.Name_tovar
    LEFT JOIN user ON tovar.ID_user=user.ID_user WHERE user.ID_user= '.$user.'' ;
  // ORDER BY a;';  /*WHERE ID_igra=1*/
   
   if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Игра    </th>";
         echo "<th>Название услуги    </th>";
         echo "<th>Ник для доставки   </th>";
         echo "<th>Дата регистрации лота</th>";
         echo "<th>Сумма  </th>";
         echo "<th>Статус </th>";
         echo "<th>Комментарии к сделке  </th>";
         echo "<th>Подтвердить сделку  </th>";
         
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['Name_of_igra'] . "</td>";
            echo "<td>" . $row['Name_tovar'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['data'] . "</td>";
            echo "<td>" . $row['summa'] . "</td>";
         
           // echo "<td>" . $row['status'] . "</td>";
            $status= $row['status'];
            IF ($status =='1') {   echo "<td> " .'Сделка завершена'. "</td>";}
            else {echo "<td>" .'Ожидает подтверждения'. "</td>";}
            
            echo "<td>" . $row['comment'] . "</td>";
            echo "<td>"; 
            IF ($status =='0') {
              echo '<button class="btn btn-warning" type="submit">Подтвердить получение</button> ';  }
              else {echo '<button class="btn btn-success" type="submit">Сделка завершена</button> ';  }
              echo "</td>"; 
              
            //echo "<td>" . $row['name'] . "</td>";
            /*echo "<td>" . $row['id'] . "</td>";*/
            echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
      } else {
         echo "No records matching your query were found.";
      }
   } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>
    </div>
    <form class="form-inline my-2 my-lg-0" action="AddTovar.php">
            
<button class="btn btn-success" type="submit">
            Продать товар или услугу</button>
          </form>
    
				        
      
           
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
