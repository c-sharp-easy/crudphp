<?php


require 'conexion.php';
include 'header.php';

?>

<div class="col-sm-12" style="margin-top:10px ">

<span class="glyphicon glyphicon-user">
      </span> <span class="label label-primary" style="font-size: 16px;">Mis Contactos</span>
        

</div>



<div class="col-sm-12">

    <table class="table table-condensed table-hover table-responsive" style="margin-top: 8px;">


        <td style="background-color: #1565C0; color:white;">
           <strong>ID</strong> 
        </td>

        <td style="background-color: #1565C0; color:white;">
           <strong>NOMBRE</strong> 
        </td>

        <td style="background-color: #1565C0; color:white;">
            <strong>APELLIDO</strong> 
        </td>

        <td style="background-color: #1565C0; color:white;">
            <strong>EMAIL</strong> 
        </td>

        <td style="background-color: #1565C0; color:white;">
            <strong>FECHA DE NACIMIENTO</strong> 
        </td>

        <td style="background-color: #1565C0; color:white;">
            <strong>OCUPACION</strong> 
        </td>

        <td style="background-color: #1565C0; color:white;">
            <strong>ACCIONES</strong> 
        </td>



        <?php foreach(MOSTRAR() as $Contactos):  ?>
        <tr>
        <th>
            <?php echo $Contactos['Id'];?>
        </th>

        <th>
            <?php echo $Contactos['Nombre'];?>
        </th>

        <th>
            <?php echo $Contactos['Apellido'];?>
        </th>

        <th>
            <?php echo $Contactos['Correo'];?>
        </th>

        <th>
            <?php echo $Contactos['Fecha'];?>
        </th>

        <th>
            <?php echo $Contactos['Ocupacion'];?>
        </th>

        <th>
            
            <a class="btn btn-sm btn-primary" href="editar.php?id=<?php echo $Contactos["Id"]; ?>"> <span class="glyphicon glyphicon-pencil" ></span> </a>
            <a class="btn btn-sm btn-danger" href="eliminar.php?id=<?php echo $Contactos["Id"]; ?>"  > <span class="glyphicon glyphicon-trash" ></span> </a>
        </th>


        <tr/>
        <?php endforeach ?>



    </table>


</div>

<?php include 'footer.php' ?>

</body>
</html>
