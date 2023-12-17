<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function index($id)
    {
        $restaurant=Restaurant::all()->find($id);
        $products = DB::table('products')
            ->where('restaurant_id', '=', $id )
            ->get();
//        $products=product::all()->get()->where('restaurant_id','=' ,$restaurant_id);
//        $products=product::all();
//        return view('Seller.homeRestaurant',compact('products'));
        return view('Seller.homeRestaurant',compact('products','restaurant'));
    }
    */
    public function index($id)
    {
        $restaurant=Restaurant::all()->find($id);
        $products = DB::table('products')
            ->where('restaurant_id', '=', $id )
            ->get();
//        $products=product::all()->get()->where('restaurant_id','=' ,$restaurant_id);
//        $products=product::all();
//        return view('Seller.homeRestaurant',compact('products'));
        return view('client.Restaurant',compact('products','restaurant'));

    }
public function myRestaurant()
    {
        $id=Auth::id();
        $restaurant=Restaurant::all()->find($id);
        $products = DB::table('products')
            ->where('restaurant_id', '=', $id )
            ->get();
//        $products=product::all()->get()->where('restaurant_id','=' ,$restaurant_id);
//        $products=product::all();
//        return view('Seller.homeRestaurant',compact('products'));
        return view('seller.homeRestaurant',compact('products','restaurant'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
