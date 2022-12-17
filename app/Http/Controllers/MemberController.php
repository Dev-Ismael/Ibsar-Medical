<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $members = Member::get();
        return view('members',compact("members"));
    }

}
