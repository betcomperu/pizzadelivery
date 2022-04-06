<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity
{
    protected $attributes = [
        'id' => "",
        'nombre' => "",
        'email' => "",
        'Dni_Ruc' => "",
        'telefono' => "" ,
        'password_hash' => "", 
        'activacion_hash' => ""
    ];

    protected $dates = ['fecha_alta', 'fecha_edit', 'fecha_delete'];
   
}
