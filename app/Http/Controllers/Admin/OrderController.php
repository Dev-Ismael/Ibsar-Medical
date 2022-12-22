<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Http\Requests\Orders\UpdateOrderRequest;
use App\Models\Offer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perPage( $num=10 )
    {
        // Get Parent Rows Count
        $offersCount = Offer::count();

        // Dynamic pagination
        $orders = Order::orderBy('id','desc')->paginate( $num );
        return view("admin.order.index",compact("orders","offersCount"));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Parent Rows Count
        $offersCount = Offer::count();

        $orders = Order::orderBy('id','desc')->paginate( 10 );
        return view("admin.order.index",compact("orders","offersCount"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offers = Offer::select('id','title')->get();
        return view("admin.order.create",compact('offers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // return $requestData;
        // Store in DB
        try {
            $order = Order::create( $requestData );
                return redirect() -> route("admin.order.index")-> with( [ "success" => " Order store successfully"] ) ;
            if(!$order)
                return  redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at store opration"] ) ;
        } catch (\Exception $e) {
            return  redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at store opration"] ) ;
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
        $order = Order::findOrFail($id);
        return view("admin.order.show" , compact("order") ) ;
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
        $order = Order::findOrFail($id);
        $offers = Offer::select('id','title')->get();
        return view("admin.order.edit" , compact("order","offers") ) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        // find id in Db With Error 404
        $order = Order::findOrFail($id);

        // save all request in one variable
        $requestData = $request->all();

        // return $requestData;

        // Update Record in DB
        try {
            $update = $order-> update( $requestData );
                return redirect() -> route("admin.order.index")-> with( [ "success" => " Order updated successfully"] ) ;
            if(!$update)
                return redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at update opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at update opration"] ) ;
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
        $order = Order::findOrFail($id);

        // Delete Record from DB
        try {
            $delete = $order->delete();
                return redirect() -> route("admin.order.index")-> with( [ "success" => " Order deleted successfully"] ) ;
            if(!$delete)
                return redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at delete opration"] ) ;
        } catch (\Exception $e) {
            return redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at delete opration"] ) ;
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

        $orders = Order::where('email', 'like', "%{$request->search}%")->paginate( 10 );
        return view("admin.order.index",compact("orders"));

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
                $delete = Order::destroy( $request->id );
                    return redirect() -> route("admin.order.index")-> with( [ "success" => " Orders deleted successfully"] ) ;
                if(!$delete)
                    return redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            } catch (\Exception $e) {
                return redirect() -> route("admin.order.index")-> with( [ "failed" => "Error at delete opration"] ) ;
            }
        }

    }


}
