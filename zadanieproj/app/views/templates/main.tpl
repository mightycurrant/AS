<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Sklep</title>
   <meta name="description" content="S">
   <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style.css" />
   <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style2.css" />
   <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
   <script type="text/javascript" src="{$conf->app_url}/js/plugin.js"></script>
</head>
<body>

   <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_root}albumList" class="pure-menu-heading pure-menu-link">Lista albumów</a>
{if count($conf->roles)>0}
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
   <a href="{$conf->action_root}userShow" class="pure-menu-heading pure-menu-link">Moje konto</a>
{else}	
	<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
{/if}
</div>

{block name=top} {/block}

{block name=messages}

   {if $msgs->isMessage()}
      <div class="messages bottom-margin">
         <ul>
         {foreach $msgs->getMessages() as $msg}
         {strip}
            <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
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