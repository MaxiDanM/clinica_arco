<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Medicamento;
use MVC\Router;

class PonentesController
{

    public static function index(Router $router)
    {
        session_start();
        $medicamento = new Medicamento;
        $allmedicamentos = $medicamento->all();
        $_SESSION['allmedicamentos'] = $allmedicamentos;
        $router->render('admin/ponentes/index', [
            'titulo' => 'Medicamentos'
        ]);
    }

    public static function crear(Router $router)
    {
        $alertas = [];
        $clave = $_POST['clave'];
        $_POST['presentacion'] = intval($_POST['presentacion']);

        $alertas = [];
        $medicamento = new Medicamento;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $medicamento->sincronizar($_POST);

            // Crear un nuevo usuario
            $medicamento->guardar();
        }

        // Render a la vista
        $router->render('admin/ponentes/crear', [
            'titulo' => 'Registrar Medicamento',
            'alertas' => $alertas
        ]);
    }

    public static function editar(Router $router)
    {
        $medicamento = new Medicamento;
        $_SESSION['datosMedicamentoEdicion'] = $medicamento->find($_GET['idMedicamento']);

        $router->render('admin/ponentes/editar', [
            'titulo' => 'Editar Medicamentos'
        ]);
    }

    public static function actualizar(Router $router)
    {
        $medicamento = new Medicamento;

        $medicamento->id = $_GET['idMedicamento'];
        $medicamento->clave = $_GET['clave'];
        $medicamento->nom_generico = $_GET['nom_generico'];
        $medicamento->nom_comercial = $_GET['nom_comercial'];
        $medicamento->presentacion = $_GET['presentacion'];
        $medicamento->descripcion = $_GET['descripcion'];
        $medicamento->precio = $_GET['precio'];
        $medicamento->existencia = $_GET['existencia'];
        $medicamento->lote = $_GET['lote'];
        $medicamento->vencimiento = $_GET['vencimiento'];

        $medicamento->actualizar();

        header('Location: /admin/ponentes');
    }

    public static function borrar(Router $router)
    {
        echo $_GET['idMedicamento'];

        $medicamento = new Medicamento;

        $medicamento->eliminarporId($_GET['idMedicamento']);

        header('Location: /admin/ponentes');
    }
}
