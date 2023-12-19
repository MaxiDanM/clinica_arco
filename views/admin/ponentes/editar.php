<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>
<?php
$medicamento = $_SESSION['datosMedicamentoEdicion'];
?>
<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Medicamento</legend>
    <div class="formulario__campo">
        <label for="clave" class="formulario__label">Clave</label>
        <input type="text" class="formulario__input" id="clave" name="clave" placeholder="Clave del Medicamento" value="<?php echo $medicamento->clave ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nom_generico" class="formulario__label">Nombre Genérico</label>
        <input type="text" class="formulario__input" id="nom_generico" name="nom_generico" placeholder="Nombre Genérico del Medicamento" value="<?php echo $medicamento->nom_generico ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nom_comercial" class="formulario__label">Nombre Comercial</label>
        <input type="text" class="formulario__input" id="nom_comercial" name="nom_comercial" placeholder="Nombre Comercial del Medicamento" value="<?php echo $medicamento->nom_comercial ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="presentacion" class="formulario__label">Presentación</label>
        <select name="presentacion" id="presentacion">
            <option value="0" <?php if ($medicamento->presentacion == 0) echo "selected"; ?>>Capsula</option>
            <option value="1" <?php if ($medicamento->presentacion == 1) echo "selected"; ?>>Jarabe</option>
            <option value="2" <?php if ($medicamento->presentacion == 2) echo "selected"; ?>>Pomada</option>
            <option value="3" <?php if ($medicamento->presentacion == 3) echo "selected"; ?>>Polvo</option>
            <option value="4" <?php if ($medicamento->presentacion == 4) echo "selected"; ?>>Pastas</option>
            <option value="5" <?php if ($medicamento->presentacion == 5) echo "selected"; ?>>Cremas</option>
            <option value="6" <?php if ($medicamento->presentacion == 6) echo "selected"; ?>>Emplaste</option>
            <option value="7" <?php if ($medicamento->presentacion == 7) echo "selected"; ?>>Suspension</option>
            <option value="8" <?php if ($medicamento->presentacion == 8) echo "selected"; ?>>Emulsion</option>
            <option value="9" <?php if ($medicamento->presentacion == 9) echo "selected"; ?>>Elixir</option>
            <option value="10" <?php if ($medicamento->presentacion == 10) echo "selected"; ?>>Locion</option>
            <option value="11" <?php if ($medicamento->presentacion == 11) echo "selected"; ?>>Inyectable</option>
            <option value="12" <?php if ($medicamento->presentacion == 12) echo "selected"; ?>>Pildora</option>
            <option value="13" <?php if ($medicamento->presentacion == 13) echo "selected"; ?>>Sello</option>
            <option value="14" <?php if ($medicamento->presentacion == 14) echo "selected"; ?>>Supositorio</option>
            <option value="15" <?php if ($medicamento->presentacion == 15) echo "selected"; ?>>Gotas</option>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <input type="text" class="formulario__input" id="descripcion" name="descripcion" placeholder="Descripcón del Medicamento" value="<?php echo $medicamento->descripcion ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="precio" class="formulario__label">Precio</label>
        <input type="text" class="formulario__input" id="precio" name="precio" placeholder="Precio del Medicamento" value="<?php echo $medicamento->precio ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="existencia" class="formulario__label">Existencia</label>
        <input type="number" class="formulario__input" id="existencia" name="existencia" placeholder="Existencia" value="<?php echo $medicamento->existencia ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="lote" class="formulario__label">Lote</label>
        <input type="number" class="formulario__input" id="lote" name="lote" placeholder="Lote" value="<?php echo $medicamento->lote ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="vencimiento" class="formulario__label">Vencimiento</label>
        <input type="date" class="formulario__input" id="vencimiento" name="vencimiento" placeholder="Caducidad del Medicamento" value="<?php echo $medicamento->vencimiento ?? ''; ?>">
    </div>

    <a href="#" class="dashboard__enlace" onclick="window.location.href='/admin/ponentes/actualizar?idMedicamento=<?php echo $medicamento->id ?>'+'&clave='+document.getElementById('clave').value+'&nom_generico='+document.getElementById('nom_generico').value+'&nom_comercial='+document.getElementById('nom_comercial').value+'&presentacion='+document.getElementById('presentacion').value+'&descripcion='+document.getElementById('descripcion').value+'&precio='+document.getElementById('precio').value+'&existencia='+document.getElementById('existencia').value+'&lote='+document.getElementById('lote').value+'&vencimiento='+document.getElementById('vencimiento').value">
        Guardar Cambios
    </a>
</fieldset>