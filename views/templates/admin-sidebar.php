<?php /*if ($_SESSION['id_privilegio']) {
    header('Location: login.php');
    exit();
} */ ?>
<?php session_start() ?>
<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <?php if ($_SESSION['id_privilegio'] == 1) { ?>
            <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-house dashboard__icono"></i>
                <span class="dashboard__menu-texto">
                    Inicio
                </span>
            </a>
        <?php } ?>

        <?php if ($_SESSION['id_privilegio'] == 1) { ?>
            <a href="/admin/ponentes" class="dashboard__enlace <?php echo pagina_actual('/ponentes') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-tablets dashboard__icono"></i>
                <span class="dashboard__menu-texto">
                    Medicamentos
                </span>
            </a>
        <?php } ?>

        <?php if ($_SESSION['id_privilegio'] == 1) { ?>
            <a href="/admin/eventos" class="dashboard__enlace <?php echo pagina_actual('/eventos') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-user-doctor dashboard__icono"></i>
                <span class="dashboard__menu-texto">
                    Doctores
                </span>
            </a>
        <?php } ?>

        <?php if ($_SESSION['id_privilegio'] == 1) { ?>
            <a href="/admin/registrados" class="dashboard__enlace <?php echo pagina_actual('/registrados') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-user-nurse dashboard__icono"></i>
                <span class="dashboard__menu-texto">
                    Enfermeros
                </span>
            </a>
        <?php } ?>

        <?php if ($_SESSION['id_privilegio'] == 3 || $_SESSION['id_privilegio'] == 2) { ?>
            <a href="/admin/pacientes" class="dashboard__enlace <?php echo pagina_actual('/pacientes') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-bed dashboard__icono"></i>
                <span class="dashboard__menu-texto">
                    Pacientes
                </span>
            </a>
        <?php } ?>

        <?php if ($_SESSION['id_privilegio'] == 2 || $_SESSION['id_privilegio'] == 3) { ?>
            <a href="/admin/regalos" class="dashboard__enlace <?php echo pagina_actual('/regalos') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-sheet-plastic dashboard__icono"></i>
                <span class="dashboard__menu-texto">
                    Recetas
                </span>
            </a>
        <?php } ?>

    </nav>
</aside>