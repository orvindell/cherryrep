<?php
require_once('/connect.php');
require_once('/functions.php');
?> 

<?php
$haslo = $_POST['haslo'];

if (delete_buyout($db, $haslo) === TRUE) {
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