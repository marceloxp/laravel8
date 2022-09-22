<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakexCreateAdminCrud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makex:createadmincrud {modelname : Model Name} {--title=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new AdminCrud class';

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
        $argModelName = $this->argument('modelname');
        if (!$argModelName) {
            $argModelName = $this->ask('Model Name');
        }

        $argTitle = $this->option('title');
        if (!$argTitle) {
            $argTitle = $this->ask('Admin Title');
        }

        $modelname = ucfirst($argModelName); // Config
        $classname = $modelname . 'Crud'; // ConfigCrud
        $phpdocvar = $modelname . '  $' . strtolower($modelname); // Config  $config
        $modelvar = $modelname . ' $' . strtolower($modelname); // Config $config
        $title = $argTitle; // Título
        $modelvariable = strtolower($modelname); // config
        $phpmodelvar = '$' . $modelvariable; // $config

        $replaces = compact('modelname', 'classname', 'phpdocvar', 'modelvar', 'title', 'modelvariable', 'phpmodelvar');
        $filename = base_path('stubs/AdminCrud.stub');
        $filedest = base_path('app/Services/Admin/' . $modelname . 'Crud.php');
        $template = file_get_contents($filename);
        foreach ($replaces as $key => $value) {
            $template = str_replace('{{ ' . $key . ' }}', $value, $template);
        }
        file_put_contents($filedest, $template);

        return 0;
    }
}
