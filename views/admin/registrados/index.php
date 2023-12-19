<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/registrados/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Enfermero
    </a>
</div>

<table class="listado-enfermeros">
    <thead>
        <tr>
            <th>curp</th>
            <th>nombre</th>
            <th>appat</th>
            <th>apmat</th>
            <th>sexo</th>
            <th>correo</th>
            <th>telefono</th>
            <th>direccion</th>
            <th>fecha_nac</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['allenfermeros'] as $enfermero) { ?>
            <tr>
                <td>
                    <?php echo $enfermero->curp ?>
                </td>
                <td>
                    <?php echo $enfermero->nombre ?>
                </td>
                <td>
                    <?php echo $enfermero->appat ?>
                </td>
                <td>
                    <?php echo $enfermero->apmat ?>
                </td>
                <td>
                    <?php if ($enfermero->id_sexo == 0) echo '' ?>
                    <?php if ($enfermero->id_sexo == 1) echo 'Hombre' ?>
                    <?php if ($enfermero->id_sexo == 2) echo 'Mujer' ?>
                </td>
                <td>
                    <?php echo $enfermero->correo ?>
                </td>
                <td>
                    <?php echo $enfermero->telfono ?>
                </td>
                <td>
                    <?php echo $enfermero->direccion ?>
                </td>
                <td>
                    <?php echo $enfermero->fecha_nac ?>
                </td>
                <td>
                    <a href="#" class="dashboard__enlace" onclick="window.location.href='/admin/registrados/archivar?id=<?php echo $enfermero->id ?>'">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>