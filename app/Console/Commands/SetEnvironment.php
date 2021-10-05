<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SetEnvironment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setenv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets the current environment to DEV/UAT/PROD';

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
     * @return int
     */
    public function handle()
    {
        $defaultIndex = 0;
        $env = $this->choice(
            'Choose ENVIRONMENT',
            ['DEV', 'UAT', 'PROD'],
            $defaultIndex,
            $maxAttempts = 1,
            $allowMultipleSelections = false
        );

        if ($env != 'PROD') {
            $this->info('ENV = ' . $env);

            if ($env == 'DEV') {
                $copyEnv = File::copy(base_path('.env.dev'), base_path('.env'));
            } else {
                $copyEnv = File::copy(base_path('.env.uat'), base_path('.env'));
            }

            $this->info('Successfully switched to ' . $env . ' environment');

        } else {
            if ($this->confirm('Do you really wish to switch your ENVIRONMENT to PROD?')) {
                $this->info('!!!!!ENV = ' . $env);
                $copyEnv = File::copy(base_path('.env.prod'), base_path('.env'));
                $this->info('Successfully switched to ' . $env . ' environment');
            }
        }

    }
}
