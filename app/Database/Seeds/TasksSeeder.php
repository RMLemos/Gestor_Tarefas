<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksSeeder extends Seeder
{
    public function run()
    {
        //create 5 tasks
        $tasks = [
            [
                'id_user' => 1,
                'task_name' => 'Leitura',
                'task_description' => 'Ler novo livro',
                'task_status' => 'nova',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 1,
                'task_name' => 'Desporto',
                'task_description' => 'Praticar desporto',
                'task_status' => 'nova',
                'created_at' => date('Y-m-d H:i:s')
           ],
            [
                'id_user' => 1,
                'task_name' => 'Artigo',
                'task_description' => 'Escrever artigo',
                'task_status' => 'nova',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 1,
                'task_name' => 'Ler',
                'task_description' => 'Ler livro 2',
                'task_status' => 'nova',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 1,
                'task_name' => 'Ati',
                'task_description' => 'Passear o Ati',
                'task_status' => 'nova',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        //insert usuarios
        $this->db->table('tasks')->insertBatch($tasks);

    }
}
