<?php

use Illuminate\Database\Seeder;

class TicketStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('ticket_statuses')->insert([
            [
                'name' => 'aberto',
                'alias' => 'Aberto',
                'bs_label' => 'default',
                'icon' => 'fa-circle-o',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'name' => 'em_atendimento',
                'alias' => 'Em Atendimento',
                'bs_label' => 'info',
                'icon' => 'fa-play-circle',
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'name' => 'atendido',
                'alias' => 'Atendido',
                'bs_label' => 'success',
                'icon' => 'fa-check-circle',
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'name' => 'retorno',
                'alias' => 'Retorno',
                'bs_label' => 'danger',
                'icon' => 'fa-exclamation-circle',
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'name' => 'em_espera',
                'alias' => 'Em Espera',
                'bs_label' => 'warning',
                'icon' => 'fa-stop-circle',
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [
                'name' => 'cancelado',
                'alias' => 'Cancelado',
                'bs_label' => 'primary',
                'icon' => 'fa-minus-circle',
                "created_at" => $now,
                "updated_at" => $now,
            ],
         
        ]);
    }
}
