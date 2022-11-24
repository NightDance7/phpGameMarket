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
$results = $mysqli->query("SELECT ID_igra, ID_podk, Name_tovar, cost FROM tovar"); 
//values to be inserted in database table
$ID_igra = '4';
$Name_of_igra = 'Krakozyabra';

//product 1
$ID_igra = '"'.$mysqli->real_escape_string('4').'"';

$Name_of_igra = '"'.$mysqli->real_escape_string('Krako').'"';



//Insert multiple rows
$insert = $mysqli->query("INSERT INTO igra(ID_igra, Name_of_igra) VALUES
($ID_igra, $Name_of_igra)");


if($insert){
    //return total inserted records using mysqli_affected_rows
    print 'Success! Total ' .$mysqli->affected_rows .' rows added.<br />';
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}


// close connection
$mysqli->close();
?>