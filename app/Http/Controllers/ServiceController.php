<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Traits\SEOTrait;

class ServiceController extends Controller
{
    use SEOTrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $services = Service::get();
        return view('services',compact("services"));
    }

    public function show($slug)
    {
        $service = Service::where('slug',$slug)->first();
        // if service Not Found
        if( !$service ){
            return redirect('/');
        }
        // SEO Trait
        $this->dynamicPagesSeo($service);

        return view('service',compact("service"));
    }
}
