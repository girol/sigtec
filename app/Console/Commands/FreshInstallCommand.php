<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FreshInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fresh:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '[ USPdev ] Runs the migrations and base seeders for development';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->warn("[ USPdev ] Running migrations from scratch");
        $this->call('migrate:fresh');

        $this->warn("[ USPdev ] Running base seeder");
        $this->call('db:seed');
        
        if ($this->confirm('[ USPdev ] Do you wish to run Development User Seeder?')) {
            $this->warn("[ USPdev ] Running dev seeder");
            $this->call('db:seed', [
                '--class' => 'DevSeeder'
                ]);
        }

    }
}
