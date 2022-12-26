<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responsibility;
use App\Http\Requests\Responsibilities\StoreResponsibilityRequest;
use App\Http\Requests\Responsibilities\UpdateResponsibilityRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ResponsibilityController extends Controller
{
    /**
     * Display a listing of the responsibility.
     *
     * @return \Illuminate\Http\Response
     */
    public function perPage( $num=10 )
    {
        // Dynamic pagination
        $responsibilities = Responsibility::orderBy('id','desc')->paginate( $num );
        return view("admin.responsibility.index",compact("responsibilities"));
    }


    /**
     * Display a listing of the responsibility.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsibilities = Responsibility::orderBy('id','desc')->paginate( 10 );
        return view("admin.responsibility.index",compact("responsibilities"));
    }

    /**
     * Show the form for creating a new responsibility.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsibilities = Responsibility::select('id','title')->get();
        return view("admin.responsibility.create",compact("responsibilities"));
    }

    /**
     * Store a newly created responsibility in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResponsibilityRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Create img name
        $img_extention = $request -> img -> getClientOriginalExtension();
        $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

        // Path
        $path = "images/responsibilities" ;

        // Upload
        $request -> img -> move( $path , $img_name );


        // Add images names in request array
        $requestData['img']  = $img_name;


        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];


        // return $requestData;

        // Store in DB
        try {
            $responsibility = Responsibility::create( $requestData );
                return redirect() -> route("admin.responsibility.index")-> with( [ "success" => " Responsibility store successfully"] ) ;
            if(!$responsibility)
                return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at store opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at store opration"] ) ;
        }

    }

    /**
     * Display the specified responsibility.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find id in Db With Error 404
        $responsibility = Responsibility::findOrFail($id);
        return view("admin.responsibility.show" , compact("responsibility") ) ;
    }

    /**
     * Show the form for editing the specified responsibility.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find id in Db With Error 404
        $responsibility = Responsibility::findOrFail($id);

        $responsibilities = Responsibility::select('id','title')->get();
        return view("admin.responsibility.edit" , compact("responsibility","responsibilities") ) ;

    }

    /**
     * Update the specified responsibility in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponsibilityRequest $request, $id)
    {
        // find id in Db With Error 404
        $responsibility = Responsibility::findOrFail($id);

        // save all request in one variable
        $requestData = $request->all();
        // return $requestData;

        // Check If There Images Uploaded
        $path = "images/responsibilities" ;

        if( $request -> hasFile("img") ){
            //  Upload image & Create name img
            $img_extention = $request -> img -> getClientOriginalExtension();
            $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 3628.png
            $request -> img -> move( $path , $img_name );
        }else{
            $img_name = $responsibility->img;
        }

        // Add images names in request array
        $requestData['img']  = $img_name;

        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];


        // return $requestData;

        // Update Record in DB
        try {
            $update = $responsibility-> update( $requestData );
                return redirect() -> route("admin.responsibility.index")-> with( [ "success" => " Responsibility updated successfully"] ) ;
            if(!$update)
                return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at update opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at update opration"] ) ;
        }

    }

    /**
     * Remove the specified responsibility from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find id in Db With Error 404
        $responsibility = Responsibility::findOrFail($id);

        // Delete Record from DB
        try {
            $delete = $responsibility->delete();
                return redirect() -> route("admin.responsibility.index")-> with( [ "success" => " Responsibility deleted successfully"] ) ;
            if(!$delete)
                return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at delete opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at delete opration"] ) ;
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

        $responsibilities = Responsibility::where('title', 'like', "%{$request->search}%")->paginate( 10 );
        return view("admin.responsibility.index",compact("responsibilities"));

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
                $delete = Responsibility::destroy( $request->id );
                    return redirect() -> route("admin.responsibility.index")-> with( [ "success" => " Responsibilities deleted successfully"] ) ;
                if(!$delete)
                    return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            } catch (\Exception $e) {
                return redirect() -> route("admin.responsibility.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            }
        }

    }


}
