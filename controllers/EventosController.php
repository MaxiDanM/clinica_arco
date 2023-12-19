<?php

namespace Controllers;

use Model\Doctor;
use MVC\Router;

class EventosController
{

    public static function index(Router $router)
    {

        session_start();
        $doctor = new Doctor;
        /*$alldoctores = $doctor->all();*/
        $alldoctores = $doctor->miWhere('estado', 1);
        $_SESSION['alldoctores'] = $alldoctores;
        $router->render('admin/eventos/index', [
            'titulo' => 'Doctores'
        ]);
    }

    public static function crear(Router $router)
    {
        $alertas = [];
        $_POST['id_sexo'] = intval($_POST['id_sexo']);
        $_POST['id_usuario'] = intval($_POST['id_usuario']);

        $alertas = [];
        $doctor = new Doctor;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $doctor->sincronizar($_POST);

            // Crear un nuevo usuario
            $doctor->guardar();
        }

        // Render a la vista
        $router->render('admin/eventos/crear', [
            'titulo' => 'Registrar Doctor',
            'alertas' => $alertas
        ]);
    }

    public static function archivar(Router $router)
    {
        $doctor = new Doctor;

        $doctor->id = $_GET['id'];

        $doctor->estado = 0;

        $doctor->actualizarEstado();

        header('Location: /admin/eventos');
    }
}
