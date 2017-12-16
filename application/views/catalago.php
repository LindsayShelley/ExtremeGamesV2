<?php include('css/css/menu_catalago.html'); ?>
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
    	<title>Sector De Salud</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="witdth=divice-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/css/estilos.css">
    </head>

<body>
<center><h1>Catalago</h1></center>
<br>
<br>

<?php foreach ($eg_catalago as $catalago):?>




<div class="col-xs-6 col-sm-3 text-center">
    

         <a  href=" <?php echo base_url(); ?>news/view/<?= $catalago->id; ?> ">
             <img    src="<?php echo base_url(); ?>assets/uploads/images_catalago/<?= $catalago->imagen; ?> " class="img-thumbnail"   style="height:300px; width:200px">

                      <h4 style="min-height:45px;margin:5px   0   10px    0"> <?= $catalago->nombre; ?>

                      </h4>
                    </a>
                </div>

<?php endforeach; ?>


</body>

</html>
