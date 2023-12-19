<?php

namespace Controllers;

use Model\Receta;
use MVC\Router;

class RecetasController
{

    public static function index(Router $router)
    {

        session_start();
        $receta = new Receta;
        $allrecetas = $receta->all();
        $_SESSION['allrecetas'] = $allrecetas;
        $router->render('admin/regalos/index', [
            'titulo' => 'Recetas'
        ]);
    }

    public static function crear(Router $router)
    {
        // var_dump($_POST);
        $alertas = [];
        $_POST['id_doctor'] = intval($_POST['id_doctor']);
        $_POST['id_enfermero'] = intval($_POST['id_enfermero']);
        $_POST['id_paciente'] = intval($_POST['id_paciente']);
        $_POST['id_medicamento'] = intval($_POST['id_medicamento']);

        $alertas = [];
        $receta = new Receta;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $receta->sincronizar($_POST);
            //echo array_values($_POST);

            // Crear un nuevo usuario
            $receta->guardar();
        }

        // Render a la vista
        $router->render('admin/regalos/crear', [
            'titulo' => 'Registrar Receta',
            'alertas' => $alertas
        ]);
    }

    public static function recetas(Router $router)
    {
        $receta = new Receta;

        $_SESSION['datosReceta'] = $receta->find($_GET['id']);

        $router->render('admin/regalos/recetas', [
            'titulo' => 'Ver Recetas'
        ]);
    }
}
