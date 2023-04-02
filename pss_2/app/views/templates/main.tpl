<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sklep płytowy">
    <title>CEDE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="{$conf->app_url}/css/style3.css">
    <script src="{$conf->app_url}/js/ui.js"></script>
    <script src="{$conf->app_url}/js/plugin.js"></script>
    <script src="{$conf->app_url}/js/function.js"></script>
</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#company">CEDE</a>

            <ul class="pure-menu-list">
               <li class="pure-menu-item"><a href="{$conf->action_root}albumList" class="pure-menu-link">Lista albumów</a></li>
               <li class="pure-menu-item"><a href="#contact" class="pure-menu-link"></a></li>
               {if \core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("user")}
               <li class="pure-menu-item"><a href="{$conf->action_root}userShow" class="pure-menu-link">Moje konto</a></li>
               <li class="pure-menu-item"><a href="{$conf->action_root}cartShow" class="pure-menu-link">Koszyk</a></li>
               <li class="pure-menu-item"><a href="{$conf->action_root}logout" class="pure-menu-link">Wyloguj</a></li>
               {else}	
               <li class="pure-menu-item menu-item-divided pure-menu-selected">
               <a href="{$conf->action_root}loginShow" class="pure-menu-link">Zaloguj</a>
               </li>
               {/if}
            </ul>
        </div>
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