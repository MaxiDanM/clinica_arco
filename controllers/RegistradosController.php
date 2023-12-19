<?php

namespace Controllers;

use Model\Enfermero;
use MVC\Router;

class RegistradosController
{

    public static function index(Router $router)
    {

        session_start();
        $enfermero = new Enfermero;
        $allenfermeros = $enfermero->miWhere('estado', 1);
        $_SESSION['allenfermeros'] = $allenfermeros;
        $router->render('admin/registrados/index', [
            'titulo' => 'Enfermeros'
        ]);
    }

    public static function crear(Router $router)
    {
        //var_dump($_POST);
        $alertas = [];
        $_POST['id_sexo'] = intval($_POST['id_sexo']);
        $_POST['id_usuario'] = intval($_POST['id_usuario']);

        $alertas = [];
        $enfermero = new Enfermero;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $enfermero->sincronizar($_POST);
            echo array_values($_POST);

            // Crear un nuevo usuario
            $enfermero->guardar();
        }

        // Render a la vista
        $router->render('admin/registrados/crear', [
            'titulo' => 'Registrar Enfermero',
            'alertas' => $alertas
        ]);
    }

    public static function archivar(Router $router)
    {
        $enfermero = new Enfermero;

        $enfermero->id = $_GET['id'];

        $enfermero->estado = 0;

        $enfermero->actualizarEstado();

        header('Location: /admin/registrados');
    }
}
