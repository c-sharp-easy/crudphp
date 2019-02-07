<?php

include 'header.php';
require 'conexion.php';
require 'validacion.php';

$errores = '';
if(isset($_POST['guardar'])){

    extract($_POST);


    if(VALIDARNOMBRE($Nombre)==false){

        $errores.='Debes escribir un Nombre valido. '.'<br/>';

    }

    else if(VALIDARAPELLIDO($Apellido)==false){
        $errores .= 'Debes introducir un Apellido valido.'.'<br/>';
    }


    else if(VALIDAROCUPACION($Ocupacion)==false){

        $errores .= 'Debes introducir una ocupación valida. (Minimo 4 caracteres)'.'<br/>';
    }

    else{

    
        AGREGAR($Nombre, $Apellido, $Correo, $Fecha, $Ocupacion);
        $errores ='Nulos';

    }
}

?>





<html>

<div class="col-sm-12" style="margin-top:10px ">

<span class="glyphicon glyphicon-plus">
      </span> <span class="label label-success" style="font-size: 16px;">Agregar Contacto</span>     
  
</div>

<form action="" method="POST">

<div class="col-sm-6 col-sm-offset-3 well">
    <div class="row">
        <div class="col-sm-4">
            <label class="control-label text-info" for="Nombre">
            <span class="glyphicon glyphicon-font"></span> Nombre</label>
        </div>
        <div class="col-sm-8" style="padding-bottom:5px">
            <input name="Nombre" type="text"  class="form-control" />

        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <label class="control-label text-info" for="Apellido">
            <span class="glyphicon glyphicon-font"></span> Apellido</label>
        </div>
        <div class="col-sm-8" style="padding-bottom:5px">
            <input type="text"  name="Apellido" class="form-control" />
        </div>
    </div>



    <div class="row">
        <div class="col-sm-4">
            <label class="control-label text-info" for="Ocupacion">
            <span class="glyphicon glyphicon-user"></span>Ocupacion</label>
        </div>
        <div class="col-sm-8" style="padding-bottom:5px">
            <input type="text"  name="Ocupacion" class="form-control" />
        </div>
    </div>

     <div class="row">
        <div class="col-sm-4">
            <label class="control-label text-info" for="Correo">
            <span class="glyphicon glyphicon-envelope"></span>Email</label>
        </div>
        <div class="col-sm-8" style="padding-bottom:5px">
            <input type="Email"  name="Correo" class="form-control" />
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <label for="Fecha" class="control-label text-info" >
            <span class="glyphicon glyphicon-calendar"></span> Fecha de Nacimiento</label>
        </div>
        <div class="col-sm-8" style="padding-bottom:5px">
            <input name="Fecha" type="Date" class="form-control" />
        </div>
    </div>

   
    <?php if($errores == 'Nulos'): ?>

    <div class="alert alert-success">

    <?php echo "Contacto Guardado!"?>

    </div>

    <?php endif ?>




    <center>
        <div class="row">


            <button type="submit" name="guardar" value="enviar" class="btn" style="background-color: #424242; color: white;">
               <span class="glyphicon glyphicon-floppy-disk"></span>  Guardar
            </button>

        </div>
    </center>


</div>

<div class="col-sm-2" style="width:285px; background-color:white;">

</div>


</form>


<?php include 'footer.php' ?>



</html>