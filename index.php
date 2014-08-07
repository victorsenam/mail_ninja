<!DOCTYPE html>
<html>
<head>
	<title>Main Ninja</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="content">
		<div class="text">
			<h1>Mail Ninja</h1>
				<p>Nos envie seu primeiro email ninja!</p>
				<p>Estamos ansiosos pelos seus comentários.</p>
		</div>
		<div class="contact">
			<form method="POST" action="php-mailer.php">
				<input class="mail-data" type="text" name="nome" placeholder="Seu nome completo">
				<input class="mail-data" type="mail" name="email" placeholder="seuemail@exemplo.com">
				<input class="mail-data" type="phone" name="telefone" placeholder="Seu telefone">
				<textarea class="mail-data msg" placeholder="Seu content ninja aqui"></textarea>
				<input class="btn" type="submit" value="Enviar">
			</form>
		</div>
	</div>

</body>
</html>