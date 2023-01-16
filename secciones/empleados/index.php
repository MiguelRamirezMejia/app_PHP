<?php include("../../templates/header.php"); ?>

Mostrar empleados

<div class="card">
    <div class="card-header">
        Empleados
    </div>
    <div class="card-body">
       <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Cv</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Miguel Angel Ramirez</td>
                    <td>imagen.jpg</td>
                    <td>Cv.pdf</td>
                    <td>Programador junior</td>
                    <td>15/01/2023</td>
                    <td>Carta/Editar/Eliminar</td>
                </tr>
                
            </tbody>
        </table>
       </div>
       
    </div>
    
</div>

<?php include("../../templates/footer.php"); ?>