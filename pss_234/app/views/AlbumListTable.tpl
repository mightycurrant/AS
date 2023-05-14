<div class="pure-g">

{foreach $records as $r}
{strip}
<div class="pure-u-1-4">
<img class="pure-img-responsive" src="{$conf->app_root}/images/cdsymbol.png">
<p>
{$r["nazwa_zespolu"]} <br>
{$r["tytul_albumu"]} <br>
{$r["rok_wydania"]} <br>
{$r["gatunek"]} <br>
{$r["formatt"]} <br>
{$r["cena"]} zł <br>

{if \core\RoleUtils::inRole("admin")}
	<a class="button-small pure-button button-secondary" href="{$conf->action_url}albumEdit/{$r['plyta_id']}">Edytuj</a>
	&nbsp;&nbsp;
	<a class="button-small pure-button button-warning" onclick="confirmLink('{$conf->action_url}albumDelete/{$r['plyta_id']}','Czy na pewno usunąć rekord ?')">Usuń</a>
</p>
</div>
{else}
	<a class="button-small pure-button button-secondary" href="{$conf->action_url}cartNew/{$r['plyta_id']}">
		<i class="fa fa-shopping-cart fa-lg"></i>Dodaj do koszyka
	</a>
</p>
</div>
{/if}
{/strip}
{/foreach}
</div>