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
                'id' => 1,
                'num_usp' => 100,
                'password' => bcrypt('uspdev'),
                'name' => 'Relator Chamados',
                'email' => 'relator@uspdev.local',
                'phone_number' => 1111,
                'job_titles_id' => 2, // funcionário
                'active' => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'id' => 2,
                'num_usp' => 200,
                'password' => bcrypt('uspdev'),
                'name' => 'Técnico Informática',
                'email' => 'tecnico@uspdev.local',
                'phone_number' => 2222,
                'job_titles_id' => 2, // funcionário
                'active' => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'id' => 3,
                'num_usp' => 300,
                'password' => bcrypt('uspdev'),
                'name' => 'Gestor Informática',
                'email' => 'gestor_info@uspdev.local',
                'phone_number' => 3333,
                'job_titles_id' => 1, // Docente
                'active' => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
