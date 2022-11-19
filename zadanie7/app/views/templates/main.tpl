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

      {block name=content} Domyślna treść zawartości .... {/block}

   </body>
</html>