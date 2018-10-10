<?php

use Illuminate\Database\Seeder;

class DevUserRolesTableSeeder extends Seeder
{
    /**
     * Seeder que cadastra os usuários de teste com respectivos user_roles
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            [
                'users_id' => 1, 
                'roles_id' => 1, // Relator
            ],
            [
                'users_id' => 2, 
                'roles_id' => 2, // Técnico
            ],
            [
                'users_id' => 3, 
                'roles_id' => 3, // Gestor Seção
            ],
        ]);

    }
}
