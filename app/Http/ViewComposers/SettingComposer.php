<?php

namespace App\Http\ViewComposers;

use App\Models\Setting;
use Illuminate\View\View;

class SettingComposer
{
    public function compose(View $view)
    {
        $settings = Setting::where('id', 1)->first();
        $view->with('settings', $settings);
    }
}
