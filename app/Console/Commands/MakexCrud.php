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
        $modelName = $this->argument('modelname');

        // ask for model name
        if (!$modelName) {
            $modelName = $this->ask('Model Name');
        }
        $adminTitle = $this->ask('Admin Title');

        // get strlower model name
        $modelNameLower = strtolower($modelName);

        // if not confirm execution, exit
        if (!$this->confirm('Are you sure to create CRUD for ' . $modelName . '?')) {
            return 0;
        }

        // load file "app/Console/Resources/Templates/TemplateController.php" to variable $templateController
        $templateController = file_get_contents(__DIR__ . '/../Resources/Templates/TemplateController.php');
        $templateController = str_replace('<?php /*', '', $templateController);
        $templateController = str_replace('*/ ?>', '', $templateController);
        // replace [model_name] with model name
        $templateController = str_replace('Template', $modelName, $templateController);
        // replace [admin_title] with admin title
        $templateController = str_replace('[admin_title]', $adminTitle, $templateController);
        // create file "app/Http/Controllers/Admin/[model_name]Controller.php"
        file_put_contents(base_path('app') . '/Http/Controllers/Admin/' . $modelName . 'Controller.php', $templateController);

        // create folder "resources/views/admin/[modelNameLower]"
        if (!file_exists(base_path('resources/views/admin/' . $modelNameLower))) {
            mkdir(base_path('resources/views/admin/' . $modelNameLower), 0777, true);
        }

        // load file "create_edit.blade.php" to variable $templateCreateEdit
        $templateCreateEdit = file_get_contents(__DIR__ . '/../Resources/Templates/create_edit.blade.php');
        // create file "resources/views/admin/[modelNameLower]/create_edit.blade.php"
        file_put_contents(base_path('resources/views/admin/' . $modelNameLower . '/create_edit.blade.php'), $templateCreateEdit);

        // load file "index.blade.php" to variable $templateIndex
        $templateIndex = file_get_contents(__DIR__ . '/../Resources/Templates/index.blade.php');
        // create file "resources/views/admin/[modelNameLower]/index.blade.php"
        file_put_contents(base_path('resources/views/admin/' . $modelNameLower . '/index.blade.php'), $templateIndex);


        // add comment line
        $this->info('CRUD for ' . $modelName . ' created successfully');

        return 0;
    }
}
