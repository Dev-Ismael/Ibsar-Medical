<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Requests\Appointments\StoreAppointmentRequest;
use App\Http\Requests\Appointments\UpdateAppointmentRequest;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perPage( $num=10 )
    {
        // Get Parent Rows Count
        $membersCount = Member::count();

        // Dynamic pagination
        $appointments = Appointment::orderBy('id','desc')->paginate( $num );
        return view("admin.appointment.index",compact("appointments","membersCount"));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Parent Rows Count
        $membersCount = Member::count();
        $appointments = Appointment::orderBy('id','desc')->with('member')->paginate( 10 );
        return view("admin.appointment.index",compact("appointments","membersCount"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::select('id','name')->get();
        return view("admin.appointment.create",compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Store in DB
        try {
            $appointment = Appointment::create( $requestData );
                return redirect() -> route("admin.appointment.index")-> with( [ "success" => " Appointment store successfully"] ) ;
            if(!$appointment)
                return  redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at store opration"] ) ;
        } catch (\Exception $e) {
            return  redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at store opration"] ) ;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find id in Db With Error 404
        $appointment = Appointment::findOrFail($id);
        return view("admin.appointment.show" , compact("appointment") ) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find id in Db With Error 404
        $appointment = Appointment::findOrFail($id);
        $members = Member::select('id','name')->get();
        return view("admin.appointment.edit" , compact("appointment","members") ) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, $id)
    {
        // find id in Db With Error 404
        $appointment = Appointment::findOrFail($id);

        // save all request in one variable
        $requestData = $request->all();

        // Update Record in DB
        try {
            $update = $appointment-> update( $requestData );
                return redirect() -> route("admin.appointment.index")-> with( [ "success" => " Appointment updated successfully"] ) ;
            if(!$update)
                return redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at update opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at update opration"] ) ;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find id in Db With Error 404
        $appointment = Appointment::findOrFail($id);

        // Delete Record from DB
        try {
            $delete = $appointment->delete();
                return redirect() -> route("admin.appointment.index")-> with( [ "success" => " Appointment deleted successfully"] ) ;
            if(!$delete)
                return redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at delete opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at delete opration"] ) ;
        }
    }



    /**
     * search in record.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // validate search and redirect back
        $this->validate($request, [
            'search'     =>  ['required', 'string', 'max:55'],
        ]);

        $appointments = Appointment::where('username', 'like', "%{$request->search}%")->paginate( 10 );
        return view("admin.appointment.index",compact("appointments"));

    }



    public function multiAction(Request $request)
    {

        // Validator at action
        $validator = Validator::make($request->all(),[
            "action" => 'required | string',
        ]);

        // Check If request->id exist
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        // Check If request->id exist & add validation Msg
        if( !$request->has('id') ){
            $validator->getMessageBag()->add('action', 'Please select rows..');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If Action is Delete
        if( $request->action == "delete" ){
            try {
                $delete = Appointment::destroy( $request->id );
                    return redirect() -> route("admin.appointment.index")-> with( [ "success" => " Appointments deleted successfully"] ) ;
                if(!$delete)
                    return redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            } catch (\Exception $e) {
                return redirect() -> route("admin.appointment.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            }
        }

    }


}
