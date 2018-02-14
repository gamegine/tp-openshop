<?php $url="/session.php"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main class="pure-g">
			<?=(isset($_SESSION['msg']))?'<p class="pure-u-1-1">'.$_SESSION['msg']."<p>\n":''?>
			<form action="/session.php" method="post" class="pure-u-9-24 pure-form pure-form-stacked">
				<input type="hidden" name="a" value="l">
				<label for="mail">email</label>
				<input type="text" name="mail" required autocomplete="on" placeholder="email" class="pure-input-1" <?=(isset($_SESSION['f_mail']))?'value="'.$_SESSION['f_mail'].'"':'';?>>
				<label for="mdp">password</label>
				<input type="text" name="mdp" required placeholder="password" class="pure-input-1">
				<input type="submit" value="login" class="pure-button pure-button-primary">
			</form>
			<form action="/session.php" method="post" class="pure-u-9-24 pure-form pure-form-stacked">
				<input type="hidden" name="a" value="r">
				<label for="mail">email</label>
				<input type="text" name="mail" required autocomplete="on" placeholder="email" class="pure-input-1" <?=(isset($_SESSION['f_mail']))?'value="'.$_SESSION['f_mail'].'"':'';?>>
				<label for="name">name</label>
				<input type="text" name="name" required placeholder="full name" class="pure-input-1">
				<label for="mdp">password</label>
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