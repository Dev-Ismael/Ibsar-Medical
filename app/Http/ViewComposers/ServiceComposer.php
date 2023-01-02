<?php

namespace App\Http\ViewComposers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceComposer
{
    public function compose(View $view)
    {
        $nav_services = Service::all('slug','title');
        $view->with('nav_services', $nav_services);
    }
}
