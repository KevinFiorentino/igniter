<html>

	<body>
		
		<h1>LOGEADO !!!</h1><br>
		
		<?php  @session_start();
	       if(isset($_SESSION['insert'])){ 
	       echo $_SESSION['insert']; } 
	       unset($_SESSION['insert']); ?>
		
		<h3>Crear Usuario:</h3><br>
		<?= form_open('Login/insert') ?>
		
		<label for="user">Usuario: <input type="text" name="user" placeholder="Nombre Usuario"></label><br>
		<label for="pass">Contrasena: <input type="password" name="pass" placeholder="Contrasena"></label><br>
		<?= form_submit('','Login') ?>
		
		<?= form_close() ?>
		
	</body>

</html>