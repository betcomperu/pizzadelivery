<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Entities\Usuario;

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
        ini_set("display_errors", 1);
        error_reporting(E_ALL);
        if ($id != null) {
            if ($this->request->getMethod() === 'post') {
                $usuarios = new UsuarioModel();
                $usuario = $usuarios->find($id);
                if ($usuario) {
                    $post = $this->request->getPost();
                    $usuario->fill($post);
                    // if (!$usuario->hasChanged()) {

                    //     return redirect()->back()->with('info', 'Não dados para atualizar');
                    // }

                    if ($post['password_hash'] == "") {
                        $usuarios->deshabilitarContrasena();
                        unset($post["password_hash"], $post["activacion_hash"]);
                    }
                    try {
                        $usuarios->save($usuario);
                        return redirect()->to(site_url("admin/usuarios/show/$id"))
                            ->with('suceso', "Usuario $usuario->nombre actualizado correctamente");
                    } catch (\Throwable $th) {
                        return redirect()->back()
                                // ->with('errors_model', $usuarios->errors())
                                ->with('atencion', 'Por favor verifique os erros abaixo')
                                ->withInput();
                    }
                } else {
                    return redirect()->to(site_url("admin/usuarios/"))
                        ->with('atencion', 'Usuario no encontrado');
                }
            } else {
                return redirect()->back()
                    ->with('errors_model', $this->UsuarioModel->errors())
                    ->with('atencion', ' Por favor corrija los datos ingresados');
            }
        } else {
            return redirect()->to(site_url("admin/usuarios/"))
                 ->with('atencion', 'Petición no valida');
        }
        
    }
}
