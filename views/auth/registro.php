<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario">

        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" class="formulario__input" placeholder="Tu Nombre" id="nombre" name="nombre" value="">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" class="formulario__input" placeholder="Tu Password" id="password" name="password">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input type="password" class="formulario__input" placeholder="Repetir Password" id="password2" name="password2">
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
    </div>
</main>