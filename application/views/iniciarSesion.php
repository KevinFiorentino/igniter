<html>

	<body>
	
	<?php  @session_start();
	       if(isset($_SESSION['errorLogin'])){ 
	       echo $_SESSION['errorLogin']; } 
	       unset($_SESSION['errorLogin']); ?>
	<br>

	Ingrese sus datos para Iniciar Sesi&oacuten: <br>
	
	<?= form_open('Login/login') ?>
	
	<?php 
	    $user = array(
            'name' => 'user',
            'type' => 'text',
            'placeholder' => 'Usuario',
	        'required' => 'required'
        );
        $pass = array(
            'name' => 'pass',
            'type' => 'password',
            'placeholder' => 'Contrasena',
            'required' => 'required'
        ); 
    ?>

	<?= form_label('Usuario: ', 'user') ?> 
	<?= form_input($user) ?> <br>
	
	<?= form_label('Contrasena: ', 'pass') ?>
	<?= form_input($pass) ?> <br>
	
	<?= form_submit('','Login') ?>

	<?= form_close() ?>
	
	<br>
	Recuperar contrase&ntilde;a<br>
	<?= form_open('Email/restaurar') ?>
	<label for="pass">Email: <input type="email" name="email" ></label><br>
	
	<?= form_submit('','EnviarEmail') ?>
	<?= form_close() ?>
	

	</body>

</html>