<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Article;
use App\Models\Category;
use App\Models\Member;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Subscriber;
use App\Models\Newsletter;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Responsibility;

class DashboardController extends Controller
{

    public function index()
    {

        $articles     = Article::count();
        $categories   = Category::count();
        $members      = Member::count();
        $services     = Service::count();
        $appointments = Appointment::count();
        $testimonials = Testimonial::count();
        $subscribers  = Subscriber::count();
        $newsletter   = Newsletter::count();
        $offers       = Offer::count();
        $orders       = Order::count();
        $responsibilities   = Responsibility::count();

        return view('admin.dashboard',
            compact('articles', 'categories', 'members',
            'services', 'appointments', 'testimonials', 'subscribers', 'newsletter'
            , 'offers', 'orders', 'responsibilities'));

    }

}
