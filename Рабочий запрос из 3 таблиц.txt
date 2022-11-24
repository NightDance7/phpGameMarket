<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'auction';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully</br>';
   $sql = 'SELECT igra.Name_of_igra, tovar.Name_tovar, tovar.data, user.name FROM igra 
    LEFT JOIN tovar ON igra.ID_igra = tovar.ID_igra
    LEFT JOIN user ON tovar.ID_user=user.ID_user' ;
  // ORDER BY a;';  /*WHERE ID_igra=1*/
   
   if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Игра</th>";
         echo "<th>Название услуги    </th>";
         echo "<th>Ник продавца   </th>";
         echo "<th>Дата регистрации лота</th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['Name_of_igra'] . "</td>";
            echo "<td>" . $row['Name_tovar'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['data'] . "</td>";
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