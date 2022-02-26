<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    private $UsuarioModel;
    
    public function __construct()
    {
        $this->UsuarioModel = new UsuarioModel();
    }

    public function index()
    {
       $usuarios = $this->UsuarioModel->findAll(); // Llamamos al todos los registros de la tabla
    // $usuarios2 = $this->UsuarioModel->countAll(); // Recibe cuantos registros hay en la tabla Usuarios

    }
}
