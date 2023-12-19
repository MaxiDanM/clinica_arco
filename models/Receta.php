<?php

namespace Model;

class Receta extends ActiveRecord
{
    protected static $tabla = 'receta';
    protected static $columnasDB = ['id_doctor', 'id_enfermero', 'id_paciente', 'diagnostico', 'tratamiento', 'id_medicamento', 'id'];

    public $id_doctor;
    public $id_enfermero;
    public $id_paciente;
    public $diagnostico;
    public $tratamiento;
    public $id_medicamento;
    public $id;


    public function __construct($args = [])
    {
        $this->id_doctor = $args['id_doctor'] ?? 0;
        $this->id_enfermero = $args['id_enfermero'] ?? '';
        $this->id_paciente = $args['id_paciente'] ?? '';
        $this->diagnostico = $args['diagnostico'] ?? '';
        $this->tratamiento = $args['tratamiento'] ?? '';
        $this->id_medicamento = $args['id_medicamento'] ?? 0;
        $this->id = $args['id'] ?? null;
    }
}
