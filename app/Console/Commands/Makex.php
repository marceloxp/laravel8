<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Makex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Common Laravel commands';

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
        $command = $this->choice
        (
            'What do you want to do?',
            [
                'Exit',
                'Clear all cache',
                'Create a new Model, Migrate and Seeder',
                'Admin default Controller',
                'Drop all tables and re-run all migrations and seeders',
                'Increments app version',
                'Run PHPStan',
            ]
        );

        switch ($command) {
            case 'Clear all cache':
                $this->call('cache:clear');
                $this->call('view:clear');
                $this->call('config:clear');
                $this->call('route:clear');
                $this->call('makex:cached', ['--clear' => true]);
            break;
            case 'Create a new Model, Migrate and Seeder':
                $modelname = $this->ask('What is the model name?');
                $this->call('make:model', ['name' => 'App/Models/' . $modelname, '--migration' => true, '-s' => true]);
                // get filename of current Model
                $modelFile = app_path('Models/' . $modelname . '.php');
                $model = file_get_contents($modelFile);
                // replace extends Model by extends BaseModel
                $model = str_replace('extends Model', 'extends BaseModel', $model);
                // save file on disk
                $this->info('Saving file...');
                file_put_contents($modelFile, $model);
            break;
            case 'Admin default Controller':
                $modelname = $this->ask('What is the model name?');
                $this->call('makex:crud', ['modelname' => $modelname]);
            break;
            case 'Drop all tables and re-run all migrations and seeders':
                // confirm before dropping tables
                if ($this->confirm('Are you sure you want to drop all tables and re-run all migrations and seeders?')) {
                    $this->call('migrate:fresh', ['--seed' => true]);
                }
            break;
            case 'Increments app version':
                // call app:inc
                $this->call('app:inc');
            break;
            case 'Run PHPStan':
                // call phpstan
                // vendor/bin/phpstan analyse app
                $process = new Process(['php', 'vendor/bin/phpstan', 'analyse', '--memory-limit=2G']);
                $process->setTimeout(3600);
                $process->run(function ($type, $buffer) {
                    if (Process::ERR === $type) {
                        echo 'ERR > '.$buffer;
                    } else {
                        echo $buffer;
                    }
                });
            break;
        }

        return 0;
    }
}
