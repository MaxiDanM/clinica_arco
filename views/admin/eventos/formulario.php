<?php
session_start();
?>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Doctor</legend>
    <div class="formulario__campo">
        <label for="curp" class="formulario__label">CURP</label>
        <input type="text" class="formulario__input" id="curp" name="curp" placeholder="Curp del Doctor" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre del Doctor" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="appat" class="formulario__label">Apellido P</label>
        <input type="text" class="formulario__input" id="appat" name="appat" placeholder="Apellido Paterno del Doctor" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="apmat" class="formulario__label">Apellido M</label>
        <input type="text" class="formulario__input" id="apmat" name="apmat" placeholder="Apellido Materno del Doctor" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="id_sexo" class="formulario__label">Sexo</label>
        <select name="id_sexo" id="id_sexo">
            <option value="0"></option>
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="especialidad" class="formulario__label">Especialidad</label>
        <input type="text" class="formulario__input" id="especialidad" name="especialidad" placeholder="Especialidad del Doctor" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="correo" class="formulario__label">Correo</label>
        <input type="email" class="formulario__input" id="correo" name="correo" placeholder="Correo del Doctor" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="telfono" class="formulario__label">Teléfono</label>
        <input type="tel" class="formulario__input" id="telfono" name="telfono" placeholder="Teléfono del Doctor" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="direccion" class="formulario__label">Dirección</label>
        <input type="text" class="formulario__input" id="direccion" name="direccion" placeholder="Dirección del Doctor" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="fecha_nac" class="formulario__label">Fecha de Nacimiento</label>
        <input type="date" class="formulario__input" id="fecha_nac" name="fecha_nac" placeholder="" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>
    <input type="hidden" value="1" name="id_usuario">
</fieldset>