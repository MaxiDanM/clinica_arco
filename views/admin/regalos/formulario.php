<?php
session_start();

use Model\Enfermero;
use Model\Medicamento;

$enfermero = new Enfermero;
$medicamento = new Medicamento;
$allenfermeros = $enfermero->miWhere('estado', 1);
$_SESSION['lista_enfermeros'] = $allenfermeros;
$allmedicamentos = $medicamento->all();
//foreach ($_SESSION['lista_enfermeros'] as $enfermero) {
//    echo 'Enfermero : ' . $enfermero->nombre;
//}
// $usuario = Usuario::where('nombre', $usuario->nombre);
//$doctor_usuario = $doctor->Where('id_usuario', $_SESSION['id']);
//foreach ($doctor_usuario as $usuario) {
//    echo $usuario->nombre;
//}
//echo  'Nombre doctor ' . $_SESSION['nombre_doctor'];

?>
<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Receta</legend>
    <div class="formulario__campo">
        <label for="label_doctor" class="formulario__label">Doctor</label>
        <input type="hidden" class="formulario__input" id="id_doctor" name="id_doctor" placeholder="Nombre del Doctor" value="<?php echo $_SESSION['id_doctor'] ?? ''; ?>">
        <input type="text" class="formulario__input" id="doctor_name" name="doctor_name" placeholder="Nombre del Doctor" value="<?php echo $_SESSION['nombre_doctor'] ?? ''; ?>">
    </div>



    <div class="formulario__campo">
        <select name="id_enfermero" id="id_enfermero">
            <option selected="selected">Seleccione Enfermero</option>
            <?php
            session_start();
            foreach ($_SESSION['lista_enfermeros'] as $enfermero) { ?>
                <option value="<?php echo $enfermero->id ?>"><?php echo $enfermero->nombre ?></option>
            <?php
            } ?>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="id_paciente" class="formulario__label">Paciente</label>
        <input type="hidden" class="formulario__input" id="id_paciente" name="id_paciente" placeholder="Nombre del Paciente" value="<?php echo $_SESSION['id_paciente']  ?? ''; ?>">
        <input type="text" class="formulario__input" id="nombre_paciente" name="nombre_paciente" placeholder="Nombre del Paciente" value="<?php echo $_SESSION['nombre_paciente']  ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="diagnostico">Diagnostico Médico</label>
        <textarea class="formulario__input" name="diagnostico" id="diagnostico" cols="30" rows="10"></textarea>
    </div>
    <div class="formulario__campo">
        <label for="tratamiento">Tratamiento</label>
        <textarea class="formulario__input" name="tratamiento" id="tratamiento" cols="30" rows="10"></textarea>
    </div>
    <div class="formulario__campo">
        <select name="id_medicamento" id="id_medicamento">
            <option selected="selected">Seleccione Medicamento</option>
            <?php
            session_start();
            foreach ($allmedicamentos as $medicamento) { ?>
                <option value="<?php echo $medicamento->id ?>"><?php echo $medicamento->nom_comercial ?></option>
            <?php
            } ?>
        </select>
    </div>



    <input type="hidden" value="0" name="id_usuario">
</fieldset>