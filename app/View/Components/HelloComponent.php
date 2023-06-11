<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HelloComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private string $name,
        private int    $count,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.hello-component', [
            "name" => $this->name,
            "count" => $this->count,
        ]);
    }
}
