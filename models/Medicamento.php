<?php

namespace Model;

class Medicamento extends ActiveRecord
{
    protected static $tabla = 'medicamento';
    protected static $columnasDB = ['id', 'clave', 'nom_generico', 'nom_comercial', 'presentacion', 'descripcion', 'precio', 'existencia', 'lote', 'vencimiento'];

    public $id;
    public $clave;
    public $nom_generico;
    public $nom_comercial;
    public $presentacion;
    public $descripcion;
    public $precio;
    public $existencia;
    public $lote;
    public $vencimiento;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->clave = $args['clave'] ?? '';
        $this->nom_generico = $args['nom_generico'] ?? '';
        $this->nom_comercial = $args['nom_comercial'] ?? '';
        $this->presentacion = $args['presentacion'] ?? 5;
        $this->descripcion = $args['descripcion'] ?? null;
        $this->precio = $args['precio'] ?? '';
        $this->existencia = $args['existencia'] ?? '';
        $this->lote = $args['lote'] ?? '';
        $this->vencimiento = $args['vencimiento'] ?? 0;
    }
}
