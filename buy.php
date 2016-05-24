<?php
require_once('/connect.php');
require_once('/functions.php');
?> 

<?php

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$haslo = $_POST['haslo'];
$id_dzialki = $_POST['categories_list'];
$ilosc = $_POST['ilosc'];

if (buy_things($db, $imie, $nazwisko, $haslo, $id_dzialki, $ilosc) === TRUE) {
    echo "Procedura przebiegła pomyślnie";
} else {
    echo "Nie udało się, spróbuj jescze raz</br>";
	echo $db->error;
}

?>
</br>
<a href="dzialki.php">Powrót</a>

<?php
$db->close();
?>