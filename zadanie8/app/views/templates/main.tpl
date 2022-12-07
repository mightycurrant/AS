<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>{$page_title|default:"Tytuł domyślny"}</title>
      <meta name="keywords" content="">
      <meta name="description" content="{$page_description|default:"Opis domyślny"}">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style.css" />
      <!-- Responsive-->
      <link rel="stylesheet" href="{$conf->app_url}/css/responsive.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{$conf->app_url}/css/jquery.mCustomScrollbar.min.css">
      <!-- Javascript files-->
      <script src="{$conf->app_url}/js/jquery.min.js"></script>
      <script src="{$conf->app_url}/js/bootstrap.bundle.min.js"></script>
      <script src="{$conf->app_url}/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="{$conf->app_url}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{$conf->app_url}/js/custom.js"></script>
      <script>
      function openNav() {
         document.getElementById("mySidepanel").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidepanel").style.width = "0";
      }
      </script>
   </head>
   <body>

   <div class="pure-menu pure-menu-horizontal bottom-margin">
   <a href="{$conf->action_root}calcShow" class="pure-menu-heading pure-menu-link">Kalkulator</a>
	<a href="{$conf->action_root}results" class="pure-menu-heading pure-menu-link">Lista wynikow</a>
{if count($conf->roles)>0}
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
{else}	
	<a href="{$conf->action_root}login" class="pure-menu-heading pure-menu-link">Zaloguj</a>
{/if}
</div>

{block name=top} {/block}

{block name=messages}

{if $msgs->isError()}
<div class="messages error bottom-margin">
	<ul>
	{foreach $msgs->getErrors() as $msg}
	{strip}
		<li>{$msg}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{if $msgs->isInfo()}
<div class="messages info bottom-margin">
	<ul>
	{foreach $msgs->getInfos() as $msg}
	{strip}
		<li>{$msg}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=content} {/block}

{block name=bottom} {/block}
   </body>
</html>