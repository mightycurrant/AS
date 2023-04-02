{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>CEDE</h1>
		<h2>Płyty muzyczne</h2>
	</div>

{/block}

{block name=content}
	<div class="content">
	<h2 class="content-subhead">Gatunek</h2>
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}albumList">
		<legend>Opcje wyszukiwania</legend>
		<fieldset>
			<input id="searchform" type="text" placeholder="Tytuł albumu" name="sf_tytul_albumu" value="{$searchForm->tytul_albumu}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
		</form>
	</div>

	{if \core\RoleUtils::inRole("admin")}
	<div class="bottom-margin">
	<a class="pure-button button-success" href="{$conf->action_root}albumNew">Dodaj album</a>
	</div>	
	{/if}
	<div id="table">
	{include file="AlbumListTable.tpl"}
	</div>
	{/block}

	{block name=bottom}

	 {/block}
</div>
</div>
</div>
</div>
</body>
</html>