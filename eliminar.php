<?php

require 'conexion.php';
include 'header.php';
$eliminar = '';

if(isset($_GET["id"])){

      foreach (WHERE($_GET["id"]) as $contacto) {
  
          
          $Nombre = $contacto['Nombre'];
          
  
      }
  }


  if(isset($_GET["delete"])){

      ELIMINAR($_GET["delete"]);
      $eliminar = "Contacto  Eliminado";
  }

?>

<html>

<div class="col-sm-12" style="margin-top:10px ">

<span class="glyphicon glyphicon-trash">
      </span> <span class="label label-danger" style="font-size: 16px;">Eliminar Contacto</span>
</div>

<form action="" method="POST">

<div class="col-sm-6 col-sm-offset-3 well">
    <div class="row">
        <div class="col-sm-4">
            <label class="control-label text-info" for="Nombre">
            <span class="glyphicon glyphicon-font"></span> Nombre</label>
        </div>
        <div class="col-sm-8" style="padding-bottom:5px">
            <input name="Nombre" type="text"   class="form-control"  value ="<?php if(isset($Nombre)){ echo $Nombre;} ?>"
            />

        </div>
    </div>

    
    

    <center>
        <div class="row">


            <a href="eliminar.php?delete=<?php echo $_GET["id"]; ?>" class="btn btn-danger">Eliminar</a>

        </div>
    </center>

    
<?php if(strlen($eliminar)>1):?>
<div class="alert alert-success">
<?php echo $eliminar; ?>
<?php endif ?>
</div>
</div>

</form>
<?php include 'footer.php' ?>
</html>

