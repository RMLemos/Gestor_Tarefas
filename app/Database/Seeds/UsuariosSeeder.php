<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        //create 1 usuario
        $usuarios = [
            [
                'usuario' => 'Maria',
                'senha' => password_hash('Maria', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ]
            ];

            //insert usuarios
            $this->db->table('usuarios')->insertBatch($usuarios);
    }
}
