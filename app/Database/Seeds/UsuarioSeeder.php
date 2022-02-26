<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'Alberto Chávez',
            'email'    => 'albetho@hotmail.com',
            'Dni_Ruc'    => '1009797782',
            'telefono'    => '980900066',
           
        ];
        $this->db->table('usuarios')->insert($data);
        

        // Simple Queries
    //    $this->db->query("INSERT INTO comentarios (categoria, descripcion) VALUES(:categoria:, :descripcion:)", $data);
    $data = [
        'nombre' => 'Juan Carlos Perez',
        'email'    => 'juancaper@gmail.com',
        'Dni_Ruc'    => '09090909',
        'telefono'    => '4568956',
       
    ];
        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}
