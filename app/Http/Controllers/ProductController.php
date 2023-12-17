<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function neew($idd)
    {
        $product= product::all()->find($idd);
//            ->first();
//        dd($product);
        return view('client.mealPage',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('Seller.newProduct',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension=$request->img-> getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/products';
        $request ->img -> move($path,$file_name);

        $inputs=$request->validate([
            'name'=>'required',
        ]);
        $rest_id=$request->input('restaurant_id');
        $product = product::create([
            'image'=>$file_name,
            'name'=> $request['name'],
            'price'=> $request['price'],
            'duration'=> $request['duration'],
            'details'=> $request['details'],
            'restaurant_id'=> $rest_id,
//                'image'=> $request['name'],
        ]);
        return redirect('/restaurant/'.$rest_id);

//        return redirect({{route('rest',$rest_id)}});
//        return redirect('/rest')->with(['msg'=>'success']);
//        $file_extension=$request -> img -> getClientOriginalExtension();
//        $file_name=time().'.'.$file_extension;
//        $path='images/products';
//        $request ->img -> move($path,$file_name);
//        product::create([
//            'product_name'=>$request->product_name,
//            'img'=>$file_name,
//            'price'=>$request->price,
//            'desc'=>$request->desc,
//            'cat_id'=>$request->cat_id
//        ]);
//        return redirect('products');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
