<?php

namespace Controllers;

use Model\Paciente;
use MVC\Router;

class PacientesController
{

    public static function index(Router $router)
    {

        session_start();
        $paciente = new Paciente;
        $allpacientes = $paciente->all();
        $_SESSION['allpacientes'] = $allpacientes;
        $router->render('admin/pacientes/index', [
            'titulo' => 'Pacientes'
        ]);
    }

    public static function crear(Router $router)
    {
        // var_dump($_POST);
        $alertas = [];
        $_POST['id_sexo'] = intval($_POST['id_sexo']);

        $alertas = [];
        $paciente = new Paciente;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $paciente->sincronizar($_POST);
            echo array_values($_POST);

            // Crear un nuevo usuario
            $paciente->guardar();
        }

        // Render a la vista
        $router->render('admin/pacientes/crear', [
            'titulo' => 'Registrar Paciente',
            'alertas' => $alertas
        ]);
    }

    public static function editar(Router $router)
    {
        $paciente = new Paciente;
        $_SESSION['datosPacienteEdicion'] = $paciente->find($_GET['id']);

        $router->render('admin/pacientes/editar', [
            'titulo' => 'Recetar Paciente'
        ]);
    }

    public static function pacientes(Router $router)
    {
        $paciente = new Paciente;

        $_SESSION['datosPaciente'] = $paciente->find($_GET['id']);

        $router->render('admin/pacientes/recetas', [
            'titulo' => 'Ver Recetas'
        ]);
    }
}
