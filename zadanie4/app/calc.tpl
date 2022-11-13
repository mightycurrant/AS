{extends file="../templates/main.tpl"}

{block name=footer}Stworzone na potrzeby<a href="#home"> Kalkulator kredytowy</a>{/block}

{block name=content}

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
						<form class="transfot" action="{$app_url}/app/calc.php#calc" method="post">
							<div class="col-md-12">
								<span>Szybki i niezawodny</span>
								<h3>Kalkulator kredytowy</h3>
							</div>
							<div class="col-md-12">
								<input class="transfot_form" placeholder="Kwota kredytu" id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="{$form['kwota_kredytu']}" />
							</div>
							<div class="col-md-12">
								<input class="transfot_form" placeholder="Ilość rat" id="id_il_rat" type="text" name="il_rat" value="{$form['il_rat']}" />
							</div>
							<div class="col-md-12">
								<input class="transfot_form" placeholder="Oprocentowanie" id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$form['oprocentowanie']}" />
							</div>
							<div class="col-md-12">
								<button class="get_now" type="submit" value="Oblicz">Oblicz</button>
							</div>
						</form>	

						{if isset($messages)}
							{if count($messages) > 0} 
								<h4>Wystąpiły błędy: </h4>
								<ol class="err">
								{foreach  $messages as $msg}
								{strip}
									<li>{$msg}</li>
								{/strip}
								{/foreach}
								</ol>
							{/if}
						{/if}

						<!--{if isset($infos)}
							{if count($infos) > 0} 
								<h4>Informacje: </h4>
								<ol class="inf">
								{foreach  $infos as $msg}
								{strip}
									<li>{$msg}</li>
								{/strip}
								{/foreach}
								</ol>
							{/if}
						{/if} -->
						
						{if isset($result)}
							<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #0f98f8; color: #fff; width:25em;">
								<p>Kwota do spłaty: {$result} PLN</p>
							</div>
						{/if}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
      <!-- end banner -->

{/block}