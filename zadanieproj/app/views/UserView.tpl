{extends file="main.tpl"}

{block name=top}
	<div class="title_banner">
	<p class="banner">CEDE</p>
	</div>
	{/block}

{block name=content}

	

{if \core\RoleUtils::inRole("admin")}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}userList">
	<legend>Panel administratora</legend>
	<fieldset>
		<input type="text" placeholder="login" name="sf_login" value="{$searchForm->login}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	


<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>nazwa użytkownika</th>
		<th>hasło</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $records as $r}
{strip}
	<tr>
		<td>{$r["username"]}</td>
		<td>{$r["passwordd"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}userEdit/{$r['user_id']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}userDelete/{$r['user_id']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{else}
	<table id="tab_people" class="pure-table pure-table-bordered">
	<thead>
		<tr>
			<th>nazwa użytkownika</th>
			<th>opcje</th>
		</tr>
</thead>
<tbody>
{foreach $records as $r}
{strip}
	<tr>
		<td>{$r["username"]}</td>
		<td>
			<a class="button-small pure-button button-secondary">Zmien hasło</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

<table id="tab_people" class="pure-table pure-table-bordered">
	<thead>
		<tr>
			<th>Produktów w koszyku</th>
			<th>opcje</th>
		</tr>
</thead>
<tbody>
{foreach $records as $r}
{strip}
	<tr>
		<td></td>
		<td>
			<a class="button-small pure-button button-secondary">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{/if}
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