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
   <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
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
<!-- body -->
<body class="main-layout">
   <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="#home">Strona główna</a>
      <a href="#calc">Kalkulator kredytowy</a>
   </div>
   <!-- header -->
   <header>
      <!-- header inner -->
      <div id="home" class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4">
                  <div class="logo">
                     <a href="{$conf->app_url}/index.php"><h1>Kalkulator kredytowy</h1></a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8">
                  <div class="right_bottun">
                     <ul class="conat_info d_none ">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                     </ul>
                     <button class="openbtn" onclick="openNav()"><img src="{$conf->app_url}/images/menu_icon.png" alt="#"/> </button> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->

{block name=content} Domyślna treść zawartości .... {/block}

<!--  footer -->
   <footer>
      <div class="footer bottom_cross1">
         <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                           <p>
                              {block name=footer} Domyślna treść stopki .... {/block}
                           </p>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </footer>
      <!-- end footer -->
   </body>
</html>