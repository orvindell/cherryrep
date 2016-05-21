<?php

function get_offers($db) {
    $sql = 'SELECT dzialki.id, planety.nazwa as "nazwa_planety", kategorie_dzialek.nazwa as "nazwa_kategorii", dzialki.ilosc
	FROM dzialki
	INNER JOIN planety
	ON dzialki.fk_id_planety=planety.id
	INNER JOIN kategorie_dzialek
	ON  dzialki.fk_id_kategorii=kategorie_dzialek.id';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data;
}

function get_number_of_buyouts($db, $id) {
    $sql = 'SELECT IFNULL(SUM(ilosc),0) as number FROM kupione_dzialki k WHERE k.fk_id_dzialki = '.$id;
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data[0]['number'];
}

function delete_buyout($db, $password) {
    $sql = 'DELETE FROM kupione_dzialki WHERE haslo = SHA1("'.$password.'")';
	return $db->query($sql);
}

?>