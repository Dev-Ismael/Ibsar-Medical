<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offers\StoreOfferRequest;
use App\Http\Requests\Offers\UpdateOfferRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return OfferResource::collection($offers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfferRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Create img name
        $img_extention = $request -> img -> getClientOriginalExtension();
        $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

        // Path
        $path = "images/offers" ;

        // Upload
        $request -> img -> move( $path , $img_name );


        // Add images names in request array
        $requestData['img']  = $img_name;

        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        // Store
        $offer = Offer::create( $requestData );

        return response()->json($offer, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::find($id);
        return OfferResource::collection($offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $request, $id)
    {
        // find id in Db With Error 404
        $offer = Offer::findOrFail($id);

        // save all request in one variable
        $requestData = $request->all();
        // return $requestData;

        // Check If There Images Uploaded
        $path = "images/offers" ;


        if( $request -> hasFile("img") ){
            //  Upload image & Create name img
            $img_extention = $request -> img -> getClientOriginalExtension();
            $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 3628.png
            $request -> img -> move( $path , $img_name );
        }else{
            $img_name = $offer->img;
        }

        // Add images names in request array
        $requestData['img']  = $img_name;

        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        $update = $offer-> update( $requestData );

        return response()->json($offer, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::find($id)->delete();
        return response()->json(null, 204);
    }
}
