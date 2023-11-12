<?php

$conn = new mysqli('localhost','root','','new');

// verificam conexiunea

if($conn->connect_error){
    die('Conexiune esuata!!'.$conn->connect_error);
}else{
    echo "V-ati conectat!!!";
}

$sql = 'CREATE TABLE users(
    id  int auto_increment primary key,
    nume VARCHAR(255),
    email VARCHAR(255)
)';




?>