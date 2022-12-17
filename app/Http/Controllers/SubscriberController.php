<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubscriberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriberRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();


        try {

            // store row in table
            $subscriber = Subscriber::create( $requestData );

            // if not save in DB
            if(!$subscriber){
                return abort(500, 'Whatever you were looking for, look somewhere else');
            }

            return view('submission', [
                'messege' => 'تم تسجيل اشتراكك في ابصار بنجاح!',
                'link' => 'home'
            ]);

        } catch (\Exception $e) {
            return abort(500, 'Whatever you were looking for, look somewhere else');
        }
    }

}
