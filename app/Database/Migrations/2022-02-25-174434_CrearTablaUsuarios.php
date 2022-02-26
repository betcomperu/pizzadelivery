<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearTablaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type'=> 'INT',
                'constraint' => 5,
                'unsigned' =>true,
                'auto_increment' => true,
            ],
            'nombre' =>[
                'type'=> 'VARCHAR',
                'constraint'=>'255',
            ],
            'email'=>[
                'type'=> 'VARCHAR',
                'constraint'=>'255',
            ],
            'Dni_Ruc'=>[
                'type'=> 'VARCHAR',
                'constraint'=>'12',
                'null'=>true,
                'unique' => true,
            ],
            'telefono'=>[
                'type'=> 'VARCHAR',
                'constraint'=>'20',
            ],
            'es_admin'=>[
                'type'=> 'BOOLEAN',
                'null'=>false,
                'default'=>false,
            ],
            'activo'=>[
                'type'=> 'BOOLEAN',
                'null'=>false,
                'default'=>false,
            ],
            'password_hash'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '64',
                
            ],
            'activacion_hash'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '64',
                'unique'=>true,
                'null'=>true,
            ],
            'reset_hash'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '64',
                'unique'=>true,
                'null'=> true,
            ],
            'reset_expira'=>[
                'type'=> 'DATETIME',
                 'null'=>true,
                 'default'=>null,
            ],
            'fecha_alta'=>[
                'type'=> 'DATETIME',
                 'null'=>true,
                 'default'=>null,
            ],
            'fecha_edit'=>[
                'type'=> 'DATETIME',
                 'null'=>true,
                 'default'=>null,
            ],
            'fecha_delete'=>[
                'type'=> 'DATETIME',
                 'null'=>true,
                 'default'=>null,
            ],

        ]);

        $this->forge->addPrimaryKey('id')->addUniqueKey('email');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
