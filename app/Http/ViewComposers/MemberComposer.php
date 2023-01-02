<?php

namespace App\Http\ViewComposers;

use App\Models\Member;
use Illuminate\View\View;

class MemberComposer
{
    public function compose(View $view)
    {
        $all_members = Member::all('id','name');
        $view->with('all_members', $all_members);
    }
}
