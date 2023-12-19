<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/eventos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Doctor
    </a>
</div>

<table class="listado-doctores">
    <thead>
        <tr>
            <th>curp</th>
            <th>nombre</th>
            <th>appat</th>
            <th>apmat</th>
            <th>sexo</th>
            <th>especialidad</th>
            <th>correo</th>
            <th>telefono</th>
            <th>direccion</th>
            <th>fecha_nac</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['alldoctores'] as $doctor) { ?>
            <tr>
                <td>
                    <?php echo $doctor->curp ?>
                </td>
                <td>
                    <?php echo $doctor->nombre ?>
                </td>
                <td>
                    <?php echo $doctor->appat ?>
                </td>
                <td>
                    <?php echo $doctor->apmat ?>
                </td>
                <td>
                    <?php if ($doctor->id_sexo == 0) echo '' ?>
                    <?php if ($doctor->id_sexo == 1) echo 'Hombre' ?>
                    <?php if ($doctor->id_sexo == 2) echo 'Mujer' ?>
                </td>
                <td>
                    <?php echo $doctor->especialidad ?>
                </td>
                <td>
                    <?php echo $doctor->correo ?>
                </td>
                <td>
                    <?php echo $doctor->telfono ?>
                </td>
                <td>
                    <?php echo $doctor->direccion ?>
                </td>
                <td>
                    <?php echo $doctor->fecha_nac ?>
                </td>
                <td>
                    <a href="#" class="dashboard__enlace" onclick="window.location.href='/admin/eventos/archivar?id=<?php echo $doctor->id ?>'">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>