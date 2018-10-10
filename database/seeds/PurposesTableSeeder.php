<?php

use Illuminate\Database\Seeder;

class PurposesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('purposes')->insert([
            [
                'id' => 1,
                'description' => 'Projetos Didáticos',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 2,
                'description' => 'Projetos de Pesquisa',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 3,
                'description' => 'Projetos de Laboratório',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 4,
                'description' => 'Departamento',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 5,
                'description' => 'Atendimento Externo',
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
