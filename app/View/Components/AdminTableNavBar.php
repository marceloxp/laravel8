<?php

namespace App\View\Components;

use Illuminate\View\Component;

# TODO: Transform this to a blade component

class AdminTableNavBar extends Component
{
    public $search;
    public $model;
    public $crud;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($crud, $model, $search)
    {
        $this->crud = $crud;
        $this->model = $model;
        $this->search = $search;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-table-nav-bar');
    }
}
