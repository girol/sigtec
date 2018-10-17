<?php

use Illuminate\Database\Seeder;

class DevRoleUserTableSeeder extends Seeder
{
    /**
     * Seeder que cadastra os usuários de teste com respectivos user_roles
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            [
                'user_id' => 1, 
                'role_id' => 1, // Relator
            ],
            [
                'user_id' => 2, 
                'role_id' => 2, // Técnico
            ],
            [
                'user_id' => 3, 
                'role_id' => 3, // Gestor Seção
            ],
        ]);

    }
}
