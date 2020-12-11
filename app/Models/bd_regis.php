<?php namespace App\Models;

use CodeIgniter\Model;

class bd_regis extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'idUsuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nombre', 'Apellido', 'Correo', 'Telefono', 'Contraseña'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}