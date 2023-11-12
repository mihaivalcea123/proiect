<?php

// 1.scrieti un program care sa afiseze salut pe ecran

echo "Salut";

//2. declaratri doua variabile si afisati suma lor

$a = 10;
$b = 50;

echo $a+$b;

echo "<br>";

// 3.Creati un formular simplu si care accepta un nume si il afiseaza pe ecran

if($_SERVER['REQUEST_METHOD']=="POST"){
    $nume  = $_POST['nume'];

    echo "Numele meu este ".$nume;
}


?>

<form method  = "POST">
    <label>Nume: </label>
    <input type = "text" name = "nume">
    <input type = "submit" value = "Afiseaza">
</form>

<?php
// 4.creati un array cu 5 elemente si folosind o bucla foreach sa le afiseze

$elemente = array(1,2,3,4,5);

foreach($elemente as $value){
    echo "Elementele sunt {$value}"."<br>";
}

// 5.scrieti o functie care primeste doi parametri si returneaza produsul lor

function produs($a,$b){
    return $a * $b;
}

echo produs(3,4);


// 6.Afisati data si ora curenta intr-un format ales

echo "Data si ora este".$data = date('Y-m-d H:i:s');

// 7. creati un script care salveaza o variabila de sesiune

//session_start();
$_SESSION['variabila']="Valoare";

echo "Sesiunea are valoarea de".$_SESSION['variabila'];

echo "<br>";

// 8. scrieti un script care creeaza un fisier. Scrieti ceva in el si apoi il citeste

file_put_contents("fisier.txt",'continut');
$continut = file_get_contents("fisier.txt");
echo $continut;

echo "<br>";
// 9. definiti o clasa simpla si creati o instanta a aceasteia

class Vacanta{
    public $tema = "Problema";
}

$vacanta = new Vacanta();

echo $vacanta->tema;

echo "<br>";
// 10. creati un script care inverseaza un sir de caracatere

$sir = "Salutare";

echo strrev($sir);
