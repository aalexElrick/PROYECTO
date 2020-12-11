<?php namespace App\Models;

use CodeIgniter\Model;

class bd_model extends Model
{
    protected $table      = 'consulta';
    protected $primaryKey = 'idPaciente';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nombre', 'Apellidos', 'Edad', 'Estatura', 'Fecha', 'Hora', 'Doctor', 'Correo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}