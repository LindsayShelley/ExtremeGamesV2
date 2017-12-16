<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />

		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/login.css" media="screen" />

		 <style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		min-height: 500px;
		 	}
		 	#formulario_login{
		 		font-size: 24px;
		 		border: 8px solid #112233;
		 	}
		 	/*estilos en las letras del label*/
		 	label{
		 		display: block;
		 		font-size: 20px;
		 		color: #ffffff;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 10px;
		 		width: 400px;
		 	}
		 	/*Boton verdesito*/
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background: #2B9801;
		 		color: #fff;
		 		border-radius: 12px;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
		 	}
		 	p{
		 		color: #FF0000;
		 		font-size: 15px;
		 	}
		 </style>
	</head>
	<body>

<div id="torch"></div>
<script src= url('js/jquery.min.js')></script>


	<?php
	$usuario = array('name' => 'usuario', 'placeholder' => 'Nombre_de_usuario');
	$contraseña = array('name' => 'contraseña',	'placeholder' => 'Introduce_tu_contraseña');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>
	<div class="container_12">
		<h1>Formulario de login con varios perfiles de usuario</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<div class="grid_6 push_1" id="campos_login">
					<?=form_open(base_url().'login/new_user')?>
					<label for="usuario">Nombre de usuario:</label>
					<?=form_input($usuario)?><p><?=form_error('usuario')?></p>
					<label for="contraseña">Contraseña:</label>
					<?=form_password($contraseña)?><p><?=form_error('contraseña')?></p>
					<?=form_hidden('token',$token)?>
					<?=form_submit($submit)?>
					<?=form_close()?>
					<?php
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<script src="js/login.js" "></script>
	</body>
</html>
