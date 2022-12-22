<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Http\Requests\Offers\StoreOfferRequest;
use App\Http\Requests\Offers\UpdateOfferRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    /**
     * Display a listing of the offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function perPage( $num=10 )
    {
        // Dynamic pagination
        $offers = Offer::orderBy('id','desc')->paginate( $num );
        return view("admin.offer.index",compact("offers"));
    }


    /**
     * Display a listing of the offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::orderBy('id','desc')->paginate( 10 );
        return view("admin.offer.index",compact("offers"));
    }

    /**
     * Show the form for creating a new offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.offer.create");
    }

    /**
     * Store a newly created offer in storage.
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


        // return $requestData;

        // Store in DB
        try {
            $offer = Offer::create( $requestData );
                return redirect() -> route("admin.offer.index")-> with( [ "success" => " Offer store successfully"] ) ;
            if(!$offer)
                return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at store opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at store opration"] ) ;
        }

    }

    /**
     * Display the specified offer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find id in Db With Error 404
        $offer = Offer::findOrFail($id);
        return view("admin.offer.show" , compact("offer") ) ;
    }

    /**
     * Show the form for editing the specified offer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find id in Db With Error 404
        $offer = Offer::findOrFail($id);
        return view("admin.offer.edit" , compact("offer") ) ;

    }

    /**
     * Update the specified offer in storage.
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

        if( $request -> hasFile("icon") ){
            //  Upload image & Create name icon
            $icon_extention = $request -> icon -> getClientOriginalExtension();
            $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 3628.png
            $request -> icon -> move( $path , $icon_name );
        }else{
            $icon_name = $offer->icon;
        }

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
        $requestData['icon'] = $icon_name;


        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];


        // return $requestData;

        // Update Record in DB
        try {
            $update = $offer-> update( $requestData );
                return redirect() -> route("admin.offer.index")-> with( [ "success" => " Offer updated successfully"] ) ;
            if(!$update)
                return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at update opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at update opration"] ) ;
        }

    }

    /**
     * Remove the specified offer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find id in Db With Error 404
        $offer = Offer::findOrFail($id);

        // Delete Record from DB
        try {
            $delete = $offer->delete();
                return redirect() -> route("admin.offer.index")-> with( [ "success" => " Offer deleted successfully"] ) ;
            if(!$delete)
                return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at delete opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at delete opration"] ) ;
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

        $offers = Offer::where('title', 'like', "%{$request->search}%")->paginate( 10 );
        return view("admin.offer.index",compact("offers"));

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
                $delete = Offer::destroy( $request->id );
                    return redirect() -> route("admin.offer.index")-> with( [ "success" => " Offers deleted successfully"] ) ;
                if(!$delete)
                    return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            } catch (\Exception $e) {
                return redirect() -> route("admin.offer.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            }
        }

    }


}
