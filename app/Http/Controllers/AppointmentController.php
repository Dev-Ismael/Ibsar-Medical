<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\Appointments\StoreAppointmentRequest;

class AppointmentController extends Controller
{

    public function store(StoreAppointmentRequest $request)
    {
        $requestData = $request->all();

        try {

            // store row in table
            $appointment = Appointment::create( $requestData );

            // if not save in DB
            if(!$appointment){
                return abort(500, 'Whatever you were looking for, look somewhere else');
            }

            return view('submission', [
                'messege' => 'تم تسجيل الموعد بنجاح!',
                'link' => 'home'
            ]);

        } catch (\Exception $e) {
            return abort(500, 'Whatever you were looking for, look somewhere else');
        }

    }

}
