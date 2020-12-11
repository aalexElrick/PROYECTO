<?php namespace App\Models;

use CodeIgniter\Model;

class bd_foro extends Model
{
    protected $table      = 'foro';
    protected $primaryKey = 'idPregunta';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Pregunta'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}