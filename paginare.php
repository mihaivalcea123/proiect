<?php

include_once("config.php");

// preluam numarul de pagini din URL sau il setam la 1

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$pe_pagina = 10;// numarul de inregistrari pe pagina
$start = ($pagina - 1)* $pe_pagina;

// facem o interogare

$sql = "SELECT * FROM   Users LIMIT $start, $pe_pagina";
$result = $conn->query($sql);

// afisam intregistrarile

if($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nume</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['id']."</td><td>".$row['nume']."</td><td>".$row['email']."</td></tr>";
    }
    echo "</table>";
}else{
    echo " 0 rezulate";
}
$conn->close();

?>
<div class = "pagina">
    <a href = "?pagina=1">Prima</a>
    <a href = "?pagina =<?php echo max($pagina-1,1);?>">Anterioara</a>
    <a href = "?pagina=<?php echo $pagina+1;?>">Urmatoarea</a>
</div>