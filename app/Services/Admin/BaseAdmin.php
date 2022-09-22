<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\View;

/**
 * Class BaseAdmin.
 */
class BaseAdmin
{
    public $title = 'UMS Admin';
    public $options;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->options = collect([]);
        View::share([
            'admin_title' => $this->title,
            'options' => $this->options,
        ]);
    }

    /**
     * Add an option to the admin panel.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function setOption($name, $value)
    {
        $this->options->put($name, $value);
        View::share([
            'options' => $this->options,
        ]);
    }
}
