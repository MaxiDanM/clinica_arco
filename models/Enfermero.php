<?php

namespace Model;

class Enfermero extends ActiveRecord
{
    protected static $tabla = 'enfermero';
    protected static $columnasDB = ['id', 'curp', 'nombre', 'appat', 'apmat', 'id_sexo', 'correo', 'telfono', 'direccion', 'fecha_nac', 'id_usuario', 'estado'];

    public $id;
    public $curp;
    public $nombre;
    public $appat;
    public $apmat;
    public $id_sexo;
    public $correo;
    public $telfono;
    public $direccion;
    public $fecha_nac;
    public $id_usuario;
    public $estado;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->curp = $args['curp'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->appat = $args['appat'] ?? '';
        $this->apmat = $args['apmat'] ?? '';
        $this->id_sexo = $args['id_sexo'] ?? 0;
        $this->correo = $args['correo'] ?? '';
        $this->telfono = $args['telfono'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->fecha_nac = $args['fecha_nac'] ?? '';
        $this->id_usuario = $args['id_usuario'] ?? 3;
        $this->estado = $args['estado'] ?? 1;
    }
}
