<?php include('css/css/menu_cliente.html'); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>catalago</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >
    <head>
    	<title>Perfil</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="witdth=divice-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/css/estilos.css">
    </head>


<body>

<div class="text-center">

	<img    src="<?php echo base_url(); ?>assets/uploads/images_usuarios/<?=$this->session->userdata('imagen')?> " class="img-thumbnail"   style="height:300px; width:200px">
</br>
</br>
 <h3 style="text-align: center">Nombre: <?=$this->session->userdata('nombre')?>  <?=$this->session->userdata('paterno')?>  <?=$this->session->userdata('materno')?></h3>
 <h3 style="text-align: center">Telefono: <?=$this->session->userdata('telefono')?></h3>
 <h3 style="text-align: center">Correo: <?=$this->session->userdata('correo')?></h3>
 <h3 style="text-align: center">Saldo: <?=$this->session->userdata('nu_saldo')?></h3>
 <h3 style="text-align: center">Puntos: <?=$this->session->userdata('nu_puntos')?></h3>
 <h3 style="text-align: center">Horas Extra: <?=$this->session->userdata('nu_extra')?></h3>



                    </a>
                </div>



</body>

</html>
