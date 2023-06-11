<?php

namespace App\View\Creators;

use Illuminate\View\View;

class MeongCreator
{
    /**
     * Bind data to the view.
     */
    public function create(View $view): void
    {
        $view->with('creator', 'INI SI MEONG');
    }
}
