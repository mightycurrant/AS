		
	<table id="tab_results" class="pure-table pure-table-bordered">
	<thead>
	<tr>
		<th>Nazwa zespołu</th>
		<th>Tytuł albumu</th>
		<th>Rok wydania</th>
		<th>Gatunek</th>
		<th>Format</th>
		<th>Cena</th>
		<th>Opcje</th>
	</tr>
	</thead>
	<tbody>
	{foreach $records as $r}
	{strip}
		<tr>
			<td>{$r["nazwa_zespolu"]}</td>
			<td>{$r["tytul_albumu"]}</td>
			<td>{$r["rok_wydania"]}</td>
			<td>{$r["gatunek"]}</td>
			<td>{$r["formatt"]}</td>
			<td>{$r["cena"]}</td>
			
			
			<td>
				{if \core\RoleUtils::inRole("admin")}
				<a class="button-small pure-button button-secondary" href="{$conf->action_url}albumEdit/{$r['plyta_id']}">Edytuj</a>
				&nbsp;
				<a class="button-small pure-button button-warning"
				onclick="confirmLink('{$conf->action_url}albumDelete/{$r['plyta_id']}','Czy na pewno usunąć rekord ?')">Usuń</a>
				{else}
				<a class="button-small pure-button button-secondary" href="{$conf->action_url}koszykNew/{$r['plyta_id']}">Dodaj do koszyka</a>
				{/if}
			</td>
			
		</tr>
	{/strip}
	{/foreach}
	</tbody>
	</table>
