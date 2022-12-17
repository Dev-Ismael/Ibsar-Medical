<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Member;
use App\Models\Service;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $members      = Member::where('slider_show','1')->get();
        $articles     = Article::orderBy('id','desc')->limit(3)->get();
        $services     = Service::where('visibility', '1')->limit(3)->get();

        // // SEO Trait
        // $this->staticPagesSeo(
        //     'Home',
        //     'Precision Accounting Intl LLC provides professional services in the Tri-State Area and specialize in helping and guiding business owners',
        //     'tax services,Tax,cpa firms,LLC,LLP,CPA,IRS,NJ,new jersey,clifton,consulting firms,consulting services,payroll,taxes 2021,consulting services,business,cpa business,precision accounting'
        // );

        return view('home' , compact('members','articles','services'));
    }
}
