<?php $url="/session.php"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main action="/session.php?a=l" class="pure-g">
			<form action="" class="pure-u-9-24 pure-form pure-form-stacked">
				<label for="email">email</label>
				<input type="text" name="name" required autocomplete="on" placeholder="email" class="pure-input-1">
				<label for="email">password</label>
				<input type="text" name="mdp" required placeholder="password" class="pure-input-1">
				<input type="submit" value="login" class="pure-button pure-button-primary">
			</form>
			<form action="/session.php?a=r" class="pure-u-9-24 pure-form pure-form-stacked">
				<label for="email">email</label>
				<input type="email" name="mail" required placeholder="email" class="pure-input-1">
				<label for="email">name</label>
				<input type="text" name="name" required placeholder="full name" class="pure-input-1">
				<label for="email">password</label>
				<fieldset class="pure-group">
					<input type="text" name="mdp"  required placeholder="password" class="pure-input-1">
					<input type="text" name="mdpc" required placeholder="verifi password" class="pure-input-1">
				</fieldset>
				<input type="submit" value="register" class="pure-button pure-button-primary">
			</form>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>