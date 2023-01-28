{extends file="main.tpl"}

{block name=top}
<div class="title_banner">
<p class="banner">CEDE</p>
</div>
{/block}

{block name=content}
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}albumList">
		<legend>Opcje wyszukiwania</legend>
		<fieldset>
			<input type="text" placeholder="Tytuł albumu" name="sf_tytul_albumu" value="{$searchForm->tytul_albumu}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
		</form>
	</div>

{if count($conf->roles)>0}
<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}albumNew">Dodaj album</a>
</div>	
{/if}

<div id="table">
{include file="AlbumListTable.tpl"}
</div>

{/block}

{block name=bottom}
	<footer>
	   <div class="copyright">
			<p>
				All rights reserved<a href="#home"> cede.pl</a>
			</p>
	   </div>
 </footer>
 
 {/block}