<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakexCrud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makex:crud {modelname : Model Name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create default Admin CRUD';

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

        // ask for model name
        if (!$argModelName) {
            $argModelName = $this->ask('Model Name');
        }
        $modelname = ucfirst($argModelName); // Config
        $controllername = $modelname . 'Controller'; // ConfigController
        $crudclassname = $modelname . 'Crud'; // ConfigCrud
        $crudpgpvar = '$' . strtolower($modelname) . 'Crud'; // $configCrud
        $phpdocmodel = $modelname . '  $' . strtolower($modelname); // Config  $config
        $modelvar = $modelname . ' $' . strtolower($modelname); // Config $config
        $phpdocclasscrud = $modelname . 'Crud  $' . strtolower($modelname) . 'Crud'; // ConfigCrud  $configCrud
        $classandvar = $modelname . 'Crud $' . strtolower($modelname) . 'Crud'; // ConfigCrud $configCrud
        $title = $this->ask('Admin Title'); // Título
        $modelvariable = strtolower($modelname); // config
        $phpmodelvar = '$' . $modelvariable; // $config
        $modelpostrequest = $modelname . 'PostRequest'; // ConfigPostRequest

        // if not confirm execution, exit
        if (!$this->confirm('Are you sure to create CRUD for ' . $modelname . '?')) {
            return 0;
        }

        $replaces = compact('modelname', 'controllername', 'crudclassname', 'crudpgpvar', 'phpdocmodel', 'modelvar', 'phpdocclasscrud', 'classandvar', 'title', 'modelvariable', 'phpmodelvar', 'modelpostrequest');
        $filename = base_path('stubs/TemplateController.stub');
        $filedest = base_path('app/Http/Controllers/Admin/' . $modelname . 'Controller.php');
        $template = file_get_contents($filename);
        foreach ($replaces as $key => $value) {
            $template = str_replace('{{ ' . $key . ' }}', $value, $template);
        }
        file_put_contents($filedest, $template);

        // create folder "resources/views/admin/[modelvariable]"
        if (!file_exists(base_path('resources/views/admin/' . $modelvariable))) {
            mkdir(base_path('resources/views/admin/' . $modelvariable), 0777, true);
        }

        $filenames = [
            'index.blade.stub',
            'show.blade.stub',
            'create.blade.stub',
            'edit.blade.stub',
        ];

        foreach ($filenames as $filename)
        {
            $filesource = base_path('stubs/TemplateController/' . $filename);
            $body = file_get_contents($filesource);
            foreach ($replaces as $key => $value) {
                $body = str_replace('{{ ' . $key . ' }}', $value, $body);
            }
            $filedest = base_path('resources/views/admin/' . $modelvariable . '/' . str_replace('.stub', '.php', $filename));
            file_put_contents($filedest, $body);
        }

        // call make:request with modelname
        $this->call('make:request', ['name' => 'Admin/' . $modelname . 'PostRequest']);

        // call make:createadmincrud with modelname
        $this->call('makex:createadmincrud', ['modelname' => $modelname, '--title' => $title]);

        // add comment line
        $this->info('CRUD for ' . $modelname . ' created successfully');

        return 0;
    }
}
