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
        $this->session = \Config\Services::session();
        helper(['url', 'form', 'inflector']);
        
        
    }

    public function index()
    {
        // $usuarios = $this->UsuarioModel->findAll(); // Llamamos al todos los registros de la tabla
        // $usuarios2 = $this->UsuarioModel->countAll(); // Recibe cuantos registros hay en la tabla Usuarios

        $data = [
            'titulo' => 'Listado de usuarios',
            'usuarios' => $usuarios = $this->UsuarioModel->findAll()
        ];



        return view('Admin/Usuarios/index', $data);
    }
    public function show($id = null)
    {
        $usuarios = new UsuarioModel();

        $data = [

            'usuarios' => $usuarios->select('*')->find($id),
            'titulo' => "Detalle del Usuario $usuarios->nombre",
        ];

        return view('Admin/Usuarios/show', $data);
    }
    public function edit($id = null)
    {
        $usuarios = new UsuarioModel();

        $data = [

            'usuarios' => $usuarios->select('*')->find($id),
            'titulo' => "Editar Usuario $usuarios->nombre",
        ];

        return view('Admin/Usuarios/edit', $data);
    }
    public function actualizar($id = null)
    {

        if ($this->request->getMethod()==='post') {
            $users = new UsuarioModel();
            $data= [
                'nombre' =>$this->request->getPost('nombre'),
                'email' =>$this->request->getPost('email'),
                'Dni_Ruc' =>$this->request->getPost('Dni_Ruc'),
                'telefono' =>$this->request->getPost('telefono'),
                'password_hash' =>$this->request->getPost('password_hash'),
                'activacion_hash' =>$this->request->getPost('activacion_hash'),
                'es_admin' =>$this->request->getPost('es_admin'),
                'activo' =>$this->request->getPost('activo'),
            ];
         //   $data = $this->request->getPost();

         
       

            $users->update($id, $data);
            return redirect()->to(site_url("admin/usuarios/show/$id"))
            ->with('suceso', "Usuario $users->nombre actualizado correctamente");

        }else{
            return redirect()->back()
            ->with('errors_model', $this->UsuarioModel->errors())
            ->with('atencion', ' Por favor corrija los datos ingresados');
        }
    }
}
