<h2 class="dashboard__heading">
    <?php

    use Model\Medicamento;

    echo $titulo; ?></h2>

<?php session_start();
?>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/ponentes/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Ponente
    </a>
</div>
<input id='idMedicamento' type='hidden' value="nada" id="medicamento" />
<table class="listado-medicamentos">
    <thead>
        <tr>
            <th>clave</th>
            <th>nombre generico</th>
            <th>nombre comercial</th>
            <th>presentacion</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>existencia</th>
            <th>lote</th>
            <th>vencimeinto</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['allmedicamentos'] as $medicamento) { ?>
            <tr>
                <td>
                    <?php echo $medicamento->clave ?>
                </td>
                <td>
                    <?php echo $medicamento->nom_generico ?>
                </td>
                <td>
                    <?php echo $medicamento->nom_comercial ?>
                </td>
                <td>
                    <?php if ($medicamento->presentacion == 0) echo 'Capsula' ?>
                    <?php if ($medicamento->presentacion == 1) echo 'Jarabe' ?>
                    <?php if ($medicamento->presentacion == 2) echo 'Pomada' ?>
                    <?php if ($medicamento->presentacion == 3) echo 'Polvo' ?>
                    <?php if ($medicamento->presentacion == 4) echo 'Pastas' ?>
                    <?php if ($medicamento->presentacion == 5) echo 'Cremas' ?>
                    <?php if ($medicamento->presentacion == 6) echo 'Emplaste' ?>
                    <?php if ($medicamento->presentacion == 7) echo 'Suspension' ?>
                    <?php if ($medicamento->presentacion == 8) echo 'Emulsion' ?>
                    <?php if ($medicamento->presentacion == 9) echo 'Elixir' ?>
                    <?php if ($medicamento->presentacion == 10) echo 'Locion' ?>
                    <?php if ($medicamento->presentacion == 11) echo 'Inyectable' ?>
                    <?php if ($medicamento->presentacion == 12) echo 'Pildora' ?>
                    <?php if ($medicamento->presentacion == 13) echo 'Sello' ?>
                    <?php if ($medicamento->presentacion == 14) echo 'Supositorio' ?>
                    <?php if ($medicamento->presentacion == 15) echo 'Gotas' ?>
                </td>
                <td>
                    <?php echo $medicamento->descripcion ?>
                </td>
                <td>
                    <?php echo $medicamento->precio ?>
                </td>
                <td>
                    <?php echo $medicamento->existencia ?>
                </td>
                <td>
                    <?php echo $medicamento->lote ?>
                </td>
                <td>
                    <?php echo $medicamento->vencimiento ?>
                </td>
                <td>
                    <a href="#" class="dashboard__enlace" onclick="document.getElementById('idMedicamento').value='<?php echo $medicamento->id ?>'; window.location.href='/admin/ponentes/editar?idMedicamento=<?php echo $medicamento->id ?>'">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td>
                    <a href="#" class="dashboard__enlace" onclick="document.getElementById('idMedicamento').value='<?php echo $medicamento->id ?>'; window.location.href='/admin/ponentes/borrar?idMedicamento=<?php echo $medicamento->id ?>'">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>