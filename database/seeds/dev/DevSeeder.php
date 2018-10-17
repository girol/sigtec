<?php

use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Seeder wrapper para dados de desenvolvimento utilizando database como autenticação
     *
     * @return void
     */
    public function run()
    {
        $this->call(DevUsersTableSeeder::class);
        $this->call(DevRoleUserTableSeeder::class);
    }
}
