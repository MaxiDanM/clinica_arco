<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>
<?php
$receta = $_SESSION['datosReceta'];
?>
<?php

use Model\Doctor;
use Model\Enfermero;
use Model\Paciente;
use Model\Medicamento;

$doctor = new Doctor;
$enfermero = new Enfermero;
$paciente = new Paciente;
$medicamento = new Medicamento;
?>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/regalos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Visualizar Receta
    </a>
</div>

<table class="listado-enfermeros">
    <thead>
        <tr>
            <th>diagnostico</th>
            <th>tratamiento</th>
            <th>medicamento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php echo $receta->diagnostico ?>
            </td>
            <td>
                <?php echo $receta->tratamiento ?>
            </td>
            <td>
                <?php echo $medicamento->find($receta->id_medicamento)->nom_comercial ?>
            </td>
        </tr>
    </tbody>
</table>