<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Seeder padrão para a necessidade de minha unidade:
     * DF-FFCLRP
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('departments')->insert([
            [
                'id' => 1,
                'name' => 'manutencao',
                'icon' => 'fa-building',
                'alias' => 'Manutenção Predial',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 2,
                'name' => 'eletronica',
                'icon' => 'fa-microchip',
                'alias' => 'Eletrônica',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 3,
                'name' => 'mecanica',
                'icon' => 'fa-cog',
                'alias' => 'Oficina Mecânica',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 4,
                'name' => 'informatica',
                'icon' => 'fa-desktop',
                'alias' => 'Informática',
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
