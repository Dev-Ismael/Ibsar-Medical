<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Traits\SEOTrait;
use App\Models\Member;

class OfferController extends Controller
{
    use SEOTrait;

    public function index()
    {
        $offers      = Offer::get();

        // // SEO Trait
        // $this->staticPagesSeo(
        //     'Blog',
        //     'For many years PRECISION ACCOUNTING has been helping individuals, families and small businesses in the community prepare their taxes',
        //     'Digital switching over, How tax planning matters,Payroll management,Qbooks,How COVID-19 affected the IRS,CPA from A to Z part two,CPA from A to Z'
        // );

        return view('offers',compact('offers'));
    }

    public function show($slug)
    {
        $offer        = Offer::where('slug',$slug)->first();

        $members      = Member::get();


        // if article Not Found
        if( !$offer ){
            return redirect('/');
        }

        // SEO Trait
        $this->dynamicPagesSeo($offer);

        return view('offer',compact('offer','members'));
    }
}
