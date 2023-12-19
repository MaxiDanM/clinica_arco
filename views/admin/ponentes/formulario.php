<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Medicamento</legend>
    <div class="formulario__campo">
        <label for="clave" class="formulario__label">Clave</label>
        <input type="text" class="formulario__input" id="clave" name="clave" placeholder="Clave del Medicamento" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nom-generico" class="formulario__label">Nombre Genérico</label>
        <input type="text" class="formulario__input" id="nom-generico" name="nom_generico" placeholder="Nombre Genérico del Medicamento" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nom_comercial" class="formulario__label">Nombre Comercial</label>
        <input type="text" class="formulario__input" id="nom_comercial" name="nom_comercial" placeholder="Nombre Comercial del Medicamento" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="presentacion" class="formulario__label">Presentación</label>
        <select name="presentacion" id="presentacion">
            <option value="0">Capsula</option>
            <option value="1">Jarabe</option>
            <option value="2">Pomada</option>
            <option value="3">Polvo</option>
            <option value="4">Pastas</option>
            <option value="5">Cremas</option>
            <option value="6">Emplaste</option>
            <option value="7">Suspension</option>
            <option value="8">Emulsion</option>
            <option value="9">Elixir</option>
            <option value="10">Locion</option>
            <option value="11">Inyectable</option>
            <option value="12">Pildora</option>
            <option value="13">Sello</option>
            <option value="14">Supositorio</option>
            <option value="15">Gotas</option>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <input type="text" class="formulario__input" id="descripcion" name="descripcion" placeholder="Descripcón del Medicamento" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="precio" class="formulario__label">Precio</label>
        <input type="text" class="formulario__input" id="precio" name="precio" placeholder="Precio del Medicamento" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="existencia" class="formulario__label">Existencia</label>
        <input type="number" class="formulario__input" id="existencia" name="existencia" placeholder="Existencia" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="lote" class="formulario__label">Lote</label>
        <input type="number" class="formulario__input" id="lote" name="lote" placeholder="Lote" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="vencimiento" class="formulario__label">Vencimiento</label>
        <input type="date" class="formulario__input" id="vencimiento" name="vencimiento" placeholder="Caducidad del Medicamento" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>
</fieldset>