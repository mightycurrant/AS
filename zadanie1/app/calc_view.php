<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<?php $kwota_kredytu='';$il_rat='';$oprocentowanie='';$il_rat_w_roku=''; ?>
	<label for="id_kwota_kredytu">Kwota kredytu: </label>
	<input id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="<?php print($kwota_kredytu); ?>" /><br />
	<label for="id_il_rat">Ilosc rat: </label>
	<input id="id_il_rat" type="text" name="il_rat" value="<?php print($il_rat); ?>" /><br />
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php print($oprocentowanie); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Kwota do splaty: '.$result; ?>
</div>
<?php } ?>

</body>
</html>