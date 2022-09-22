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

    public function __construct()
    {
        $this->options = collect([]);
        View::share([
            'admin_title' => $this->title,
            'options' => $this->options,
        ]);
    }

    public function setOption($name, $value)
    {
        $this->options->put($name, $value);
        View::share([
            'options' => $this->options,
        ]);
    }
}
