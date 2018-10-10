<?php

use Illuminate\Database\Seeder;

class DevUsersTableSeeder extends Seeder
{
    /**
     * Usuários para ambiente de desenvolvimento
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('users')->insert([
            [
                'num_usp' => 100,
                'password' => bcrypt('uspdev'),
                'name' => 'Relator Chamados',
                'email' => 'relator@uspdev.local',
                'ramal' => 1111,
                'job_titles_id' => 2, // funcionário
                'active' => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'num_usp' => 200,
                'password' => bcrypt('uspdev'),
                'name' => 'Técnico Informática',
                'email' => 'tecnico@uspdev.local',
                'ramal' => 2222,
                'job_titles_id' => 2, // funcionário
                'active' => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'num_usp' => 300,
                'password' => bcrypt('uspdev'),
                'name' => 'Gestor Informática',
                'email' => 'gestor_info@uspdev.local',
                'ramal' => 3333,
                'job_titles_id' => 1, // Docente
                'active' => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
