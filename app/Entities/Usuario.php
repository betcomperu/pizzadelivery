<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity
{
   
    protected $dates   = ['fecha_alta', 'fecha_edit', 'fecha_delete'];
   
}
