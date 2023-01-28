{extends file="main.tpl"}

{block name=content}

<div class="bottom-margin">
<form action="{$conf->action_root}albumSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Informacje o albumie</legend>
		<div class="pure-control-group">
            <label for="nazwa_zespolu">Nazwa zespołu</label>
            <input id="nazwa_zespolu" type="text" placeholder="Nazwa zespołu" name="nazwa_zespolu" value="{$form->nazwa_zespolu}">
        </div>
		<div class="pure-control-group">
            <label for="tytul_albumu">Tytuł albumu</label>
            <input id="tytul_albumu" type="text" placeholder="Tytuł albumu" name="tytul_albumu" value="{$form->tytul_albumu}">
        </div>
		<div class="pure-control-group">
            <label for="rok_wydania">Rok wydania</label>
            <input id="rok_wydania" type="text" placeholder="Rok wydania" name="rok_wydania" value="{$form->rok_wydania}">
        </div>
        <div class="pure-control-group">
            <label for="gatunek">Gatunek</label>
            <input id="gatunek" type="text" placeholder="Gatunek" name="gatunek" value="{$form->gatunek}">
        </div>
        <div class="pure-control-group">
            <label for="formatt">Format</label>
            <input id="formatt" type="text" placeholder="Format" name="formatt" value="{$form->formatt}">
        </div>
        <div class="pure-control-group">
            <label for="cena">Cena</label>
            <input id="cena" type="text" placeholder="Cena" name="cena" value="{$form->cena}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}albumList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="plyta_id" value="{$form->plyta_id}">
</form>	
</div>

{/block}