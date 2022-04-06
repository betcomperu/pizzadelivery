<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\App;

class UsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    // protected $returnType       = 'object';
    protected $returnType = \App\Entities\Usuario::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['nombre','email', 'Dni_Ruc', 'telefono', 'password_hash', 'activacion_hash'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'fecha_edit';
    protected $deletedField  = 'fecha_delete';

    // Validation
    /*protected $validationRules    = [
        'nombre'     => 'required|min_length[4]|max_length[120]',
        'email'        => 'required|valid_email|is_unique[usuarios.email]',
        'Dni_Ruc'        => 'required|is_unique[usuarios.Dni_Ruc]|exact_length[10]',
        'password_hash'     => 'required|min_length[6]',
        'activacion_hash' => 'required_with[password]|matches[password]',
    ]; //*/

    protected $validationMessages = [
        'nombre' => [
            'required' => 'Sorry el nombre es campo es obligatorio.'
        ],
        'email' => [
            'required' => 'Sorry. Este campo es obligatorio.',
            'is_unique' => 'Sorry. Ese email ya existe',
        ],
        'Dni_Ruc' => [
            'required' => 'Sorry el Dni/Ruc. Este campo es obligatorio.',
            'is_unique' => 'Sorry este DNI/RUC ya existe.',
        ],
        'password_hash' => [
            'required' => 'Sorry ingrese un password. Este campo es obligatorio.'
        ],
    ]; //*/

    public function deshabilitarContrasena() {

        unset($this->validationRules['password'], $this->validationRules['password_confirmation'], $this->validationRules['email']);
    }
}
