<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        
        $products = Product::all();
        foreach ($products as $product)
        {
            $product->createUrl();
        }
        

        return view('pages.ecommerce', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.ecommerce');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
//        $request->session()->flush();
        $product = Product::find($id);


        Session::push('cart.items', $product);
        $count = count(Session::get('cart.items'));
        return view('pages.cartview', ['count' => $count]);

    }

    public function deleteItem(Request $request, $name)
    {
        $cart_items = $request->session()->get('cart.items');

        foreach ($cart_items as $k=>$v)
        {
          if ($v->product_name == $name)
          {
             Session::forget('cart.items.' .$k);//thank you @connorvg@larachat
           }
        }


        $count = count(Session::get('cart.items'));
        return view('pages.cartview', ['count' => $count]);
    }
}
