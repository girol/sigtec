<?php

use Illuminate\Database\Seeder;

class JobTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('job_titles')->insert([
            [
                'id' => 1,
                'name' => 'Docente',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 2,
                'name' => 'Funcionário',
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
