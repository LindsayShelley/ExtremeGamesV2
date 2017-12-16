<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Membresia</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <head>
    	<title>Sector De Salud</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="witdth=divice-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/css/estilos.css">
    </head>
    
<h1>Membresia</h1>
<body>
<form action="<?= base_url();?>membresia/add_eg_membresia" name="form" method="POST">
   
    <select name="user" id="inputUser" class="form-control">
                    <?php foreach ($eg_users as $user):?>
                    <option value="<?=$user->id; ?>"><?=$user->nombre; ?> <?=$user->paterno; ?> <?=$user->materno; ?> </option>
                    
                
                        <?php endforeach; ?>
                </select>
    <hr/>
        <?php foreach ($eg_membresia as $membresia):?>
   <?php endforeach; ?>
    saldo:<input type="number" name="saldo" min="0" max="100" step="50" value="">
       <hr/>
        puntos: <input type="number" name="puntos" min="0" max="100" step="50" value="">
    
                    <hr/>
       
       
    Extra:<input type='text' name="extra" /> 
    
    

               
    
    
   
    <hr/>
     
    
  <input type="submit" value="enviar" name="submit" />
</form>
<div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Saldo</td>
                                    <td>Puntos</td>
                                    <td>Extra</td>
                                
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($eg_membresia as $membresia):?>
                                    <tr>
                                        <td><?=$membresia->nu_user; ?></td>
                                        <td><?=$membresia->nu_saldo; ?></td>
                                        <td><?=$membresia->nu_puntos; ?></td>
                                        <td><?=$membresia->nu_extra; ?></td>
                                      
                                        <td>
                                           <a href="<?=bese_url()?>membresia/edit_noticia/<?=$membresia->id; ?>" class="btn btn-success btn-xs">Restar puntos</a>  
                                        </td>
                                        <?php endforeach; ?>
                                    </tr>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    
                                </tr>
                            </tfoot>
                        </table>

                        



</html>

