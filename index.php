<?php

include('inc/db.php');
include('inc/functions.php');

?>
<html>
<head>
	<title>Регистрация</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/foundation.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/content.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors.css" media="screen" />
</head>
<body>

<div class="row">
	<div class="content">
		<div class="content-logo">
			Extazy<span class="orange">WoW</span>
		</div>

		<div class="content-box">
			<div class="content-box-content">
				<form method="POST">
					<label class="orange">Логин</label>
					<input type="text" name="username" />

					<label class="orange">E-mail</label>
					<input type="text" name="email" />

					<label class="orange">Пароль</label>
					<input type="password" name="password" />

					<label class="orange">Повторный пароль</label>
					<input type="password" name="re-password" />

					<center>
						<div class="g-recaptcha" data-sitekey="<?php echo CAPTCHA_CLIENT_ID; ?>"></div>
						<br>
						<input type="submit" name="register" class="small button" value="Регистрация" />
					</center>
				</form>
			</div>
		</div>

		<div class="response">
			<?php Register(); ?>
		</div>
	</div>
</div>

<!-- Javascript Files -->
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/what-input.js"></script>
<script type="text/javascript" src="js/vendor/foundation.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
