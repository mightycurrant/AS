{extends file="main.tpl"}

{block name=content}
	
	<!-- body -->
	<body class="main-layout">
		<div id="mySidepanel" class="sidepanel">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="#home">Strona główna</a>
		<a href="#calc">Kalkulator kredytowy</a>
		<a href="#tab_results">Lista wynikow</a>
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
												kwotę kredytu (gotówkowego czy hipotecznego), okres spłaty 
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

<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_root}results">
		<legend>Opcje wyszukiwania</legend>
		<fieldset>
			<input type="text" placeholder="kwota kredytu" name="sf_kwota_kredytu" value="{$searchForm->kwota_kredytu}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
	</form>

	{include file='messages.tpl'}

</div>	

	<table id="tab_results" class="pure-table pure-table-bordered">
	<thead>
		<tr>
			<th>Kwota kredytu</th>
			<th>Ilość rat</th>
			<th>Oprocentowanie</th>
			<th>Do zapłaty</th>
			<th>Data sprawdzenia</th>
		</tr>
	</thead>
	<tbody>
	{foreach $rekordy as $r}
	{strip}
		<tr>
			<td>{$r["kwota_kredytu"]}</td>
			<td>{$r["il_rat"]}</td>
			<td>{$r["oprocentowanie"]}</td>
			<td>{$r["cala_kwota"]}</td>
			<td>{$r["data"]}</td>
		</tr>
	{/strip}
	{/foreach}
	</tbody>
	</table>

{/block}

{block name=bottom}
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