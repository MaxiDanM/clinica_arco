<?php

namespace Model;

class Doctor extends ActiveRecord
{
    protected static $tabla = 'doctor';
    protected static $columnasDB = ['id', 'curp', 'nombre', 'appat', 'apmat', 'id_sexo', 'especialidad', 'correo', 'telfono', 'direccion', 'fecha_nac', 'id_usuario', 'estado'];

    public $id;
    public $curp;
    public $nombre;
    public $appat;
    public $apmat;
    public $id_sexo;
    public $especialidad;
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
        $this->especialidad = $args['especialidad'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->telfono = $args['telfono'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->fecha_nac = $args['fecha_nac'] ?? '';
        $this->id_usuario = $args['id_usuario'] ?? 1;
        $this->estado = $args['estado'] ?? 1;
    }
}
