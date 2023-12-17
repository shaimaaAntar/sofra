<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')
            ->where('user_id', '=', Auth::id() )
            ->get();
           $carts= cart::with('products')->get()->where('user_id', '=', Auth::id());
        return view('client.cart',compact('carts'));

//        dd($products);
//        return response()->json($products);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $id,$userId)
//    public function store(Request $request)
    {
//        $user_id=Auth::id();
        $cart = Cart::create([
            'user_id'=>$userId,
            'product_id'=>$id
        ]);
        return redirect('/cart');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cartItem=cart::find($id);
//        $cartItem=cart::find($cart);
        if ($cartItem){
            $cartItem ->delete();
            return redirect()->back()->with(['message'=>'item deleted successfully']);
        }
    }
}
