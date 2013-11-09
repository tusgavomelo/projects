<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
    	<title>Popó transportes</title>
    	<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/structure.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<section class="main-container">
		
			<section class="main-header">
				<?php 
					include 'header.html';
				?>
			</section>
			<section class="main-banner-fullscreen banner" style="background-color: #000000;">
				<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Avenida+Paulista,+S%C3%A3o+Paulo&amp;aq=0&amp;oq=avenida+paulista&amp;sll=-22.546052,-48.635514&amp;sspn=5.903324,10.129395&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Paulista,+S%C3%A3o+Paulo&amp;t=m&amp;ll=-23.563043,-46.654387&amp;spn=0.019669,0.077248&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
			
			<section class="main-content auto-margin-container min-resolution">
				<h2 class="main-content-title">Entre em contato conosco</h2>
				<h1 class="main-content-byline">e conte-nos sua necessidade</h1>
				<hr class="separator"/>
				<div class="text-content">
					Podemos fazer contato através do <a href="http://www.google.com.br">Facebook</a>, via telefone (99) 9999-999 ou se preferir, envie-nos um <b>e-mail pelo formulário abaixo</b>
					<hr class="separator">
					<h1 class="main-content-byline">formulário de contato</h1>
				</div>
				<section class="main-form-container">
					<div class="area-form">
						<div class="contact-info">
							<p style="font-weight: bold;">Endereço:</p>
							<p>lallallallala lalala</p>
							<p style="font-weight: bold;">Telefone(s):</p>
							<p>111111111</p>
							<p>222222222</p>
						</div>
						<form action="" class="form">
							<label for="name" class="form-line">Nome:</label><br>
							<input type="text" class="text-field" name="name"/><br>
							<label for="email" class="form-line">E-mail</label><br>
							<input type="text" class="text-field" name="email"/><br>
							<label for="message" class="form-line">Mensagem:</label><br>
							<textarea name="text-area" cols="30" rows="10" class="text-field"></textarea><br>
							<input type="submit" class="submit" value="Enviar">
						</form>
					</div>
				</section>	
			</section>
			<footer class="main-footer">
				<?php 
					include 'footer.html';
				?>
			</footer>
		</section>
	</body>
</html>