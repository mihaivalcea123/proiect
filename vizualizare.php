<?php

require_once('config.php');

$sql = "SELECT * FROM Coments ORDER by postetd_ad DESC";

$result = $conn->query($sql);

if($result->num_rows >0){

    while($row = $result->fetch_assoc()){
        echo "<p><strong>".$row['name'].";</strong><br>".$row['comment']. "</p><br>";
    }
    
}else{
    echo "Nu exista mesaje";
}
$conn->close();
?>