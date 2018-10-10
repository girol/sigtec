<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the Main database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JobTitlesTableSeeder::class);
        $this->call(PurposesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TicketStatusesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
    }
}
