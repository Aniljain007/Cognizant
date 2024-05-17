<?php

$link = new mysqli('localhost','root','Anil@1234','CRUD');

if($link->connect_error){
    die("Connection Failed:".$link->connect_error);
} else {
    echo "<br>Conneted Successfully";
}
mysqli_close($link);

?>