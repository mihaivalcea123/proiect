<?php

require_once('config.php');

// preluam termenul cautat din formular

$nume_cautat = $conn->real_escape_string($_POST['nume_cautat']);


// cerere interogare sql

$sql = "SELECT * FROM users WHERE email LIKE '%$nume_cautat'";


$result = $conn->query($sql);

// afisare rezultate

if($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nume</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["nume"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo " 0 rezulate";
}
$conn->close();  


?>
<form method = "POST" action = "">
    Nume:
    <input type = "text" name = "nume_cautat"><br>
    <input type = "submit" value="cautare">


</form>