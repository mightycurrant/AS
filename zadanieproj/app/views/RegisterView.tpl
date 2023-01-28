{extends file="main.tpl"}

{block name=content}

<div class="bottom-margin">
<form action="{$conf->action_root}userSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Rejestracja użytkownika</legend>
		<div class="pure-control-group">
            <label for="username">login:</label>
            <input id="username" type="text" placeholder="login" name="username" value="{$form->username}">
        </div>
        <div class="pure-control-group">
            <label for="email">email:</label>
            <input id="email" type="email" placeholder="email" name="email" value="{$form->email}">
        </div>
		<div class="pure-control-group">
            <label for="passwordd">hasło:</label>
            <input id="passwordd" type="password" placeholder="hasło" name="passwordd" value="{$form->passwordd}">
        </div>
		<div class="pure-control-group">
            <label for="passwordd2">potwierdź hasło:</label>
            <input id="passwordd2" type="password" placeholder="potwierdź hasło" name="passwordd2" value="{$form->passwordd2}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}loginShow">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="user_id" value="{$form->user_id}">
</form>	
</div>

{/block}
