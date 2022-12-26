<?php

namespace App\Http\Controllers;

use App\Models\Responsibility;
use App\Traits\SEOTrait;

class ResponsibilityController extends Controller
{
    use SEOTrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $responsibilities = Responsibility::get();
        return view('responsibilities',compact("responsibilities"));
    }

    public function show($slug)
    {
        $responsibility = Responsibility::where('slug',$slug)->first();
        // if responsibility Not Found
        if( !$responsibility ){
            return redirect('/');
        }
        // SEO Trait
        $this->dynamicPagesSeo($responsibility);

        return view('responsibility',compact("responsibility"));
    }
}
