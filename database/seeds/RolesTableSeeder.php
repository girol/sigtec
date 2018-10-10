<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'relator',
                'description' => 'Usuário comum que apenas abre chamados',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 2,
                'name' => 'tecnico',
                'description' => 'Abre e Gerencia chamados para sua seção',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 3,
                'name' => 'gestor_secao',
                'description' => 'Responsável pelo setor técnico de atendimento. Vê chamados de sua seção',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 4,
                'name' => 'gestor_unidade',
                'description' => 'Vê todas as seções de atendimento',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 5,
                'name' => 'site_admin',
                'description' => 'Gerencia dados do back-end, como roles, salas, funções e novos usuários',
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
