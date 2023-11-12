<?php
require_once("config.php");

$id = (int)$_GET['id'];

$sql = "DELETE from Cart where id = $id";

if($conn->query($sql) === TRUE){
   header("cos.php");
}else{
    echo "Eroare".$sql."<br>".$conn->error;
}
?>