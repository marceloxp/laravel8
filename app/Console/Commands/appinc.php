<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class appinc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:inc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increments app version';

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
        $v_ini = config('app.version', '0.0.1');
        $this->info(sprintf('Initial version: %s', $v_ini));
        $v_end = \SemVer\SemVer\Version::fromString($v_ini)->patch()->__toString();
        $this->info(sprintf('Final version: %s', $v_end));
        $body = file_get_contents(config_path('app.php'));
        $version_ini = sprintf('\'version\' => \'%s\'', $v_ini);
        $version_end = sprintf('\'version\' => \'%s\'', $v_end);
        $body = str_replace($version_ini, $version_end, $body);
        file_put_contents(config_path('app.php'), $body);
    }
}
