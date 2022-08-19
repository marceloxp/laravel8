<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminTableNavBar extends Component
{
    public $route;
    public $routeBase;
    public $routeCreate;
    public $search;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $search)
    {
        $this->route = $route;
        $this->routeBase = route(sprintf('admin%s', ucfirst($this->route)));
        $this->routeCreate = route(sprintf('admin%sCreate', ucfirst($this->route)));
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
