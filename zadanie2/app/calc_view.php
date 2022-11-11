<?php
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
	<label for="id_kwota_kredytu">Kwota kredytu(max. 50000 PLN): </label>
	<input id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="<?php out($kwota_kredytu) ?>" /><br />
	<label for="id_il_rat">Ilosc rat: </label>
	<input id="id_il_rat" type="text" name="il_rat" value="<?php out($il_rat); ?>" /><br />
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php out($oprocentowanie) ?>" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Kwota do splaty: '.$result.' PLN'; ?>
</div>
<?php } ?>

</div>

</body>
</html>