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
				<input class="mail-data" type="text" name="nome" placeholder="Nome Completo">
				<input class="mail-data" type="mail" name="email" placeholder="Email">
                <input class="mail-data" type="mail" name="dest" placeholder="Email de Destino">
                <input class="mail-data" type="mail" name="dest" placeholder="Assunto">
				<textarea class="mail-data msg" placeholder="Seu content ninja aqui"></textarea>
				<input class="btn" type="submit" value="Enviar">
			</form>
		</div>
	</div>

</body>
</html>
