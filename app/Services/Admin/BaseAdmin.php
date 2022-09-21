<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\View;

/**
 * Class BaseAdmin.
 */
class BaseAdmin
{
    public $title = 'UMS Admin';

    public function __construct()
    {
        admin_set_title($this->title);
    }
}
