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

function get_offers_for_single_planet($db, $planet_id) {
    $sql = 'SELECT dzialki.id, planety.nazwa as "nazwa_planety", kategorie_dzialek.nazwa as "nazwa_kategorii", dzialki.ilosc
	FROM dzialki
	INNER JOIN planety
	ON dzialki.fk_id_planety=planety.id
	INNER JOIN kategorie_dzialek
	ON  dzialki.fk_id_kategorii=kategorie_dzialek.id
    WHERE planety.id = '.$planet_id;
	
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

function get_planet_names($db) {
    $sql = 'SELECT id, nazwa FROM planety';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data;
}

function buy_things($db, $imie, $nazwisko, $haslo, $id_dzialki, $ilosc) {
    $sql = 'INSERT INTO kupione_dzialki (id, imie, nazwisko, haslo, fk_id_dzialki, ilosc)
	VALUES (NULL, "'.$imie.'", "'.$nazwisko.'", SHA1("'.$haslo.'"), "'.$id_dzialki.'", "'.$ilosc.'")';
	return $db->query($sql);
}

function get_categories_prices($db) {
    $sql = 'SELECT nazwa, cena FROM kategorie_dzialek';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data;
}

function get_number_of_all_buyouts($db) {
    $sql = 'SELECT SUM(ilosc) as "suma" FROM kupione_dzialki';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data[0]['suma'];
}

function get_planet_with_most_plots($db){
	$sql = 'SELECT planety.nazwa, sum(ilosc) as "suma" 
			FROM dzialki 
			INNER JOIN planety
			ON dzialki.fk_id_planety = planety.id
			GROUP BY fk_id_planety 
			ORDER BY suma DESC
			LIMIT 1';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data[0];
}

function get_planet_with_most_luxuty_plots($db){
	$sql = 'SELECT planety.nazwa, sum(ilosc) as "suma" 
			FROM dzialki 
			INNER JOIN planety
			ON dzialki.fk_id_planety = planety.id
			WHERE dzialki.fk_id_kategorii = 3
			GROUP BY fk_id_planety 
			ORDER BY suma DESC
			LIMIT 1';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data[0];
}

function get_most_popular_plot_type($db){
	$sql = 'SELECT kategorie_dzialek.nazwa, SUM(kupione_dzialki.ilosc) as "suma" FROM kupione_dzialki
			INNER JOIN dzialki
			ON kupione_dzialki.fk_id_dzialki = dzialki.id
			INNER JOIN kategorie_dzialek
			ON dzialki.fk_id_kategorii = kategorie_dzialek.id
			GROUP BY dzialki.fk_id_kategorii
			ORDER BY SUM(kupione_dzialki.ilosc) DESC
			LIMIT 1';
	
	if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$result->free();
    return $data[0]['nazwa'];
}

?>