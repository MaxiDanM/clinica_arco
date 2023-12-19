<?php

namespace Model;

class Paciente extends ActiveRecord
{
    protected static $tabla = 'paciente';
    protected static $columnasDB = ['id', 'curp', 'nombre', 'appat', 'apmat', 'id_sexo', 'id_tiposangre', 'alergias', 'correo', 'telfono', 'direccion', 'fecha_nac'];

    public $id;
    public $curp;
    public $nombre;
    public $appat;
    public $apmat;
    public $id_sexo;
    public $id_tiposangre;
    public $alergias;
    public $correo;
    public $telfono;
    public $direccion;
    public $fecha_nac;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->curp = $args['curp'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->appat = $args['appat'] ?? '';
        $this->apmat = $args['apmat'] ?? '';
        $this->id_sexo = $args['id_sexo'] ?? 0;
        $this->id_tiposangre = $args['id_tiposangre'] ?? '';
        $this->alergias = $args['alergias'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->telfono = $args['telfono'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->fecha_nac = $args['fecha_nac'] ?? '';
    }
}
