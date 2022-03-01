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
      // $usuarios = $this->UsuarioModel->findAll(); // Llamamos al todos los registros de la tabla
    // $usuarios2 = $this->UsuarioModel->countAll(); // Recibe cuantos registros hay en la tabla Usuarios

        $data = [
            'titulo' => 'Listado de usuarios',
            'usuarios'=> $usuarios = $this->UsuarioModel->findAll()
        ];

        return view('Admin/Usuarios/index', $data);

    }
    public function show($id = null)
    {
        $usuarios = new UsuarioModel();

        $data = [
            
            'usuarios'=> $usuarios->select('*')->find($id),
            'titulo'=> "Detalle del Usuario $usuarios->nombre",
        ];

       
       
        return view('Admin/Usuarios/show', $data);


    }
}
