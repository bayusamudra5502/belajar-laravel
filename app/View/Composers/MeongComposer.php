<?php

namespace App\View\Composers;

use Illuminate\View\View;

class MeongComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('meong', 'MEONG');
    }
}
