<?php
session_start();
?>
<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<?php

use Model\Doctor;
use Model\Enfermero;
use Model\Paciente;
use Model\Usuario;
use Model\Medicamento;

$doctor = new Doctor;
$enfermero = new Enfermero;
$paciente = new Paciente;
$medicamento = new Medicamento;
$usuario = new Usuario;
?>

<!--
<div class="dashboard__contenedor-boton">
    <?php if ($_SESSION['id_privilegio'] == 2) { ?>
        <a class="dashboard__boton" href="/admin/regalos/crear">
            <i class="fa-solid fa-circle-plus"></i>
            Añadir Receta
        </a>
    <?php } ?>
</div> -->

<?php
session_start();
// $usuario = Usuario::where('nombre', $usuario->nombre);
//echo ' id  ' . $_SESSION['id'];
$doctor_usuario = Doctor::where('id_usuario', $_SESSION['id']);
//echo ' Doctor usuario ' . $doctor_usuario->nombre;
$_SESSION['nombre_doctor'] = $doctor_usuario->nombre;
$_SESSION['id_doctor'] = $doctor_usuario->id;
// $_SESSION['lista_enfermeros']  = Enfermero::all();


?>




<table class="listado-enfermeros">
    <thead>
        <tr>
            <th>doctor</th>
            <th>enfermero</th>
            <th>paciente</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['allrecetas'] as $receta) { ?>
            <tr>
                <td>
                    <?php echo $doctor->find($receta->id_doctor)->nombre ?>
                </td>
                <td>
                    <?php echo $enfermero->find($receta->id_enfermero)->nombre ?>
                </td>
                <td>
                    <?php echo $paciente->find($receta->id_paciente)->nombre ?>
                </td>
                <td>
                    <a href="#" onclick="window.location.href='/admin/regalos/recetas?id=<?php echo $receta->id ?>'" class="dashboard__enlace">
                        <i class="fa-solid fa-list"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>