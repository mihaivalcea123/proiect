<?php

include_once("config.php");

// preluam datele din formular

    $name = $conn->real_escape_string($_POST['nume']);
    $email = $conn->real_escape_string($_POST['email']);



// creare interogare sql

$sql = "INSERT INTO `users`(nume,email) VALUES ('$name','$email')";

// executam interogarea

if($conn->query($sql)=== TRUE){
    echo "Inregistrare cu succes!!";

}else{
    echo "Eroare la inserare ".$conn->error;
}
?>

<form method = "post" action = "">
    Nume: <input type = "text" name="nume">
    Email: <input type = "email" name="email">
    <input type="submit" value="Inregistrare">
</form>