<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminTableNavBar extends Component
{
    public $search;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($search)
    {
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
