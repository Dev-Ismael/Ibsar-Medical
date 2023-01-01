<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\StoreServiceRequest;
use App\Http\Requests\Services\UpdateServiceRequest;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return ServiceResource::collection($services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Create img name
        $img_extention = $request -> img -> getClientOriginalExtension();
        $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

        // Create icon name
        $icon_extention = $request -> icon -> getClientOriginalExtension();
        $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 3623628.png

        // Path
        $path = "images/services" ;

        // Upload
        $request -> img -> move( $path , $img_name );
        $request -> icon  -> move( $path , $icon_name );


        // Add images names in request array
        $requestData['img']  = $img_name;
        $requestData['icon'] = $icon_name;

        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        // Store
        $service = Service::create( $requestData );

        return response()->json($service, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return ServiceResource::collection($service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        // find id in Db With Error 404
        $service = Service::findOrFail($id);

        // save all request in one variable
        $requestData = $request->all();
        // return $requestData;

        // Check If There Images Uploaded
        $path = "images/services" ;

        if( $request -> hasFile("icon") ){
            //  Upload image & Create name icon
            $icon_extention = $request -> icon -> getClientOriginalExtension();
            $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 3628.png
            $request -> icon -> move( $path , $icon_name );
        }else{
            $icon_name = $service->icon;
        }

        if( $request -> hasFile("img") ){
            //  Upload image & Create name img
            $img_extention = $request -> img -> getClientOriginalExtension();
            $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 3628.png
            $request -> img -> move( $path , $img_name );
        }else{
            $img_name = $service->img;
        }

        // Add images names in request array
        $requestData['img']  = $img_name;
        $requestData['icon'] = $icon_name;

        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        $update = $service-> update( $requestData );

        return response()->json($service, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return response()->json(null, 204);
    }
}
