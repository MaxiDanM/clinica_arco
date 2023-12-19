<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Paciente</legend>
    <div class="formulario__campo">
        <label for="curp" class="formulario__label">CURP</label>
        <input type="text" class="formulario__input" id="curp" name="curp" placeholder="Curp del Paciente" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre del Paciente" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="appat" class="formulario__label">Apellido P</label>
        <input type="text" class="formulario__input" id="appat" name="appat" placeholder="Apellido Paterno del Paciente" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="apmat" class="formulario__label">Apellido M</label>
        <input type="text" class="formulario__input" id="apmat" name="apmat" placeholder="Apellido Materno del Paciente" value="<?php echo $ponente->ciudad ?? ''; ?>">
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
        <label for="id_tiposangre" class="formulario__label">Tipo de Sangre</label>
        <select name="id_tiposangre" id="id_tiposangre">
            <option value="0"></option>
            <option value="1">A+</option>
            <option value="2">A-</option>
            <option value="3">B+</option>
            <option value="4">B-</option>
            <option value="5">AB+</option>
            <option value="6">AB-</option>
            <option value="7">O+</option>
            <option value="8">O-</option>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="alergias" class="formulario__label">Alergias</label>
        <input type="text" class="formulario__input" id="alergias" name="alergias" placeholder="Alergias del Paciente" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="correo" class="formulario__label">Correo</label>
        <input type="email" class="formulario__input" id="correo" name="correo" placeholder="Correo del Paciente" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="telfono" class="formulario__label">Teléfono</label>
        <input type="tel" class="formulario__input" id="telfono" name="telfono" placeholder="Teléfono del Paciente" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="direccion" class="formulario__label">Dirección</label>
        <input type="text" class="formulario__input" id="direccion" name="direccion" placeholder="Dirección del Paciente" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="fecha_nac" class="formulario__label">Fecha de Nacimiento</label>
        <input type="date" class="formulario__input" id="fecha_nac" name="fecha_nac" placeholder="" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>
    <input type="hidden" value="1" name="id_usuario">
</fieldset>