<?php

namespace App\View\Components\Dashboard\Shared;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $home;
    public $breadcrumbs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($home='/dashboard', $breadcrumbs)
    {
        $this->home = $home;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.shared.breadcrumb');
    }
}
