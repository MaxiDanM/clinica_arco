<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>
<div class="dashboard__contenedor-boton">


    <?php if ($_SESSION['id_privilegio'] == 3) { ?>
        <a class="dashboard__boton" href="/admin/pacientes/crear">
            <i class="fa-solid fa-circle-plus"></i>
            Registrar Paciente
        </a>
    <?php } ?>


</div>

<table class="listado-pacientes">
    <thead>
        <tr>
            <th>curp</th>
            <th>nombre</th>
            <th>appat</th>
            <th>apmat</th>
            <th>sexo</th>
            <th>tipo de sangre</th>
            <th>alergias</th>
            <th>correo</th>
            <th>telefono</th>
            <th>direccion</th>
            <th>fecha_nac</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['allpacientes'] as $paciente) { ?>
            <tr>
                <td>
                    <?php echo $paciente->curp ?>
                </td>
                <td>
                    <?php echo $paciente->nombre ?>
                </td>
                <td>
                    <?php echo $paciente->appat ?>
                </td>
                <td>
                    <?php echo $paciente->apmat ?>
                </td>
                <td>
                    <?php if ($paciente->id_sexo == 0) echo '' ?>
                    <?php if ($paciente->id_sexo == 1) echo 'Hombre' ?>
                    <?php if ($paciente->id_sexo == 2) echo 'Mujer' ?>
                </td>
                <td>
                    <?php if ($paciente->id_tiposangre == 0) echo '' ?>
                    <?php if ($paciente->id_tiposangre == 1) echo 'A+' ?>
                    <?php if ($paciente->id_tiposangre == 2) echo 'A-' ?>
                    <?php if ($paciente->id_tiposangre == 3) echo 'B+' ?>
                    <?php if ($paciente->id_tiposangre == 4) echo 'B-' ?>
                    <?php if ($paciente->id_tiposangre == 5) echo 'AB+' ?>
                    <?php if ($paciente->id_tiposangre == 6) echo 'AB-' ?>
                    <?php if ($paciente->id_tiposangre == 7) echo 'O+' ?>
                    <?php if ($paciente->id_tiposangre == 8) echo 'O-' ?>
                </td>
                <td>
                    <?php echo $paciente->alergias ?>
                </td>
                <td>
                    <?php echo $paciente->correo ?>
                </td>
                <td>
                    <?php echo $paciente->telfono ?>
                </td>
                <td>
                    <?php echo $paciente->direccion ?>
                </td>
                <td>
                    <?php echo $paciente->fecha_nac ?>
                </td>

                <td>
                    <?php if ($_SESSION['id_privilegio'] == 2) {
                        $_SESSION['id_paciente'] = $paciente->id;
                        $_SESSION['nombre_paciente'] = $paciente->nombre;
                    ?>
                        <a class="dashboard__enlace" href="/admin/regalos/crear?id=<?php echo $paciente->id ?>">
                            <i class="fa-solid fa-file-signature"></i>
                        </a>
                    <?php } ?>

                    <!-- <a href="'<?php echo $paciente->id ?>'; window.location.href='/admin/pacientes/editar?id=<?php echo $paciente->id ?>'" class="dashboard__enlace" onclick="document.getElementById('id').value='<?php echo $paciente->id ?>'; window.location.href='/admin/pacientes/editar?id=<?php echo $paciente->id ?>'">
                        <i class="fa-solid fa-file-signature"></i>
                    </a>
                    --<
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>