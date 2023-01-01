<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Responsibilities\StoreResponsibilityRequest;
use App\Http\Requests\Responsibilities\UpdateResponsibilityRequest;
use App\Http\Resources\ResponsibilityResource;
use App\Models\Responsibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ResponsibilityController extends Controller
{
    public function index()
    {
        $responsibilities = Responsibility::all();
        return ResponsibilityResource::collection($responsibilities);
    }

    /**
     * Store a newly created resource in storage.
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

        // Store
        $responsibility = Responsibility::create( $requestData );

        return response()->json($responsibility, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsibility = Responsibility::find($id);
        return ResponsibilityResource::collection($responsibility);
    }

    /**
     * Update the specified resource in storage.
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

        $update = $responsibility-> update( $requestData );

        return response()->json($responsibility, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Responsibility::find($id)->delete();
        return response()->json(null, 204);
    }
}
