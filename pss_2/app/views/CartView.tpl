{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>CEDE</h1>
		<h2>Płyty muzyczne</h2>
	</div>
	{/block}

{block name=content}



	{foreach $records as $r}
{strip}
<div class="pure-u-1-4">
<img class="pure-img-responsive" src="{$conf->app_root}/images/cdsymbol.png">
<p>
{section name=customer loop=$plyta_id}
	<p>
	{$r["nazwa_zespolu"]} <br>
	{$r["tytul_albumu"]} <br>
	{$r["rok_wydania"]} <br>
	{$r["gatunek"]} <br>
	{$r["formatt"]} <br>
	{$r["cena"]} zł <br>
	</p>
	<a class="button-small pure-button button-warning" href="{$conf->action_url}cartDelete/{$r['plyta_id']}">Usuń</a>
	{/section}


			
{/strip}
{/foreach}

{/block}

{block name=bottom}
 
{/block}
</div>
</div>
</body>
</html>