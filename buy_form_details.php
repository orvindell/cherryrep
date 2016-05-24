<?php
require_once('/connect.php');
require_once('/functions.php');
?>

<html>
<head>
	<script>
	</script>
</head>
<body>
	
<?php
	$planet_id = intval($_GET['id']);
	$offers = get_offers_for_single_planet($db, $planet_id);
	
	if(count($offers) > 0)
	{
		echo
		'</br>
		<table id="main_table" border="1">
			<tr>
				<th>Planeta</th>
				<th>Kategoria</th>
				<th>Ilość dostępnych działek</th>
			</tr>
		';
	
		foreach ($offers as $offer) {
			echo 
			'<tr>
				<td>'.$offer["nazwa_planety"].'</td>
				<td>'.$offer['nazwa_kategorii'].'</td>
				<td>'.get_number_of_buyouts($db, $offer['id']).'/'.$offer['ilosc'].'</td>
			</tr>';
		}
		echo '</table>';
		
		echo '		
			</br>
			</br>
			
			<form  action="buy.php" name="buyform" method="post" id="buyform">  
			
					<input type="hidden" name="planet_id" value="<?php echo $planet_id; ?>" />

					<label for="imie" id="imie">Imie</label>
					<input type="text" name="imie" id="imie" size="30" value="" required/>
					</br>

					<label for="nazwisko" id="nazwisko">Nazwisko</span></label>
					<input type="text" name="nazwisko" id="nazwisko" size="30" value="" required/>
					</br>

					<label for="haslo" id="haslo">Hasło</label>
					<input type="password" name="haslo" id="haslo" size="30" value="" required/>
					</br>
					
					<label>Typ działki</label>
					<select id="categories_list" name="categories_list" onchange="printPrice()" form="buyform">
						<option selected="selected">Wybierz typ działki</option>';
						

		foreach ($offers as $offer) {
			echo '<option value="'.$offer['id'].'">'.$offer['nazwa_kategorii'].'</option>';
		}
				
		echo
					'</select>
					&emsp;
					<span id="cena"></span>
					</br>
					<label for="ilosc" id="haslo">Ilość</label>
					<input type="number" name="ilosc" min="1">
					
					</br>
					</br>
					<input class="btn-class" id="submit" type="submit" name="submit" value="Kup" />  

			</form>';
	}
?>

</body>
</html>


<?php
$db->close();
?>