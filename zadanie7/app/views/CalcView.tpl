{extends file="main.tpl"}


{block name=content}

	<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

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

<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="banner_slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
					<!-- about section -->
						<div class="row">
							<div class="col-md-7 col-lg-5">
								<div class="text-bg">
									<h1>Kalkulator kredytowy</h1>
									<span>Jak działa kalkulator kredytowy? Wpisujesz interesującą Cię 
										kwotę kredytu (gotówkowego czy hipotecznego) ,okres spłaty 
										(w miesiącach) oraz oprocentowanie. To wszystko! W moment dowiesz się 
										ile to będzie kosztować. 
									</span>
								</div>
							</div>
							<div class="col-md-12 col-lg-7">
								<div class="row">
									<div class="col-md-6">
									</div>
									<div class="col-md-6">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
      <!-- about section -->
<section>
	<div id="calc" class="calc">
		<div class="row">
			<div class="col-md-7 col-lg-5">
				<div class="text-bg">
					<h1>Oblicz ile wyniesie twoja kwota kredytu</h1>
					<span>Koszt kredytu powinien się wyświetlić po wciśnięciu przycisku Oblicz.</span>
				</div>
			</div>
			<div class="col-md-12 col-lg-7">
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6">
						<form class="transfot" action="{$conf->action_url}calcCompute#calc" method="post">
							<div class="col-md-12">
								<span>Szybki i niezawodny</span>
								<h3>Kalkulator kredytowy</h3>
							</div>
							<div class="col-md-12">
								<input class="transfot_form" placeholder="Kwota kredytu" id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="{$form->kwota_kredytu}" />
							</div>
							<div class="col-md-12">
								<input class="transfot_form" placeholder="Ilość rat" id="id_il_rat" type="text" name="il_rat" value="{$form->il_rat}" />
							</div>
							<div class="col-md-12">
								<input class="transfot_form" placeholder="Oprocentowanie" id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$form->oprocentowanie}" />
							</div>
							<div class="col-md-12">
								<button class="get_now" type="submit" value="Oblicz">Oblicz</button>
							</div>
						</form>	

						{include file='messages.tpl'}
						
						{if isset($res->result)}
							<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #0f98f8; color: #fff; width:25em;">
								<p>Kwota do spłaty: {$res->result} PLN</p>
							</div>
						{/if}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
      <!-- end banner -->

	  <!--  footer -->
	  <footer>
	  <div class="footer bottom_cross1">
		 <div class="copyright">
			   <div class="container">
				  <div class="row">
					 <div class="col-md-12">
						   <p>
							  Stworzone na potrzeby<a href="#home"> Kalkulator kredytowy</a>
						   </p>
					 </div>
				  </div>
			   </div>
		 </div>
	  </div>
   </footer>
	  <!-- end footer -->
{/block}