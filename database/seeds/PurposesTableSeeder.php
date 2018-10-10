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
                'description' => 'Projetos Didáticos',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'description' => 'Projetos de Pesquisa',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'description' => 'Projetos de Laboratório',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'description' => 'Departamento',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'description' => 'Atendimento Externo',
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
