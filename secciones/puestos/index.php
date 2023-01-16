<?php include("../../templates/header.php"); ?>


<br/>
<h2>Puestos</h2>
<div class="card">
    
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar empleado</a>
    </div>
    <div class="card-body">
       
    <div class="table-responsive-sm">
    <table class="table table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del puesto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Programador junior</td>
                <td><input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar">
                <input name="btneliminar" id="btneliminar" class="btn btn-danger" type="button" value="Eliminar"></td>
            </tr>
           
        </tbody>
    </table>
</div>

    </div>
    
</div>






<?php include("../../templates/footer.php"); ?>