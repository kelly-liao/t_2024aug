<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function register()
    {
        // return view('home');
        return "register page";   
    }

    public function login()
    {  
        // return view('home');
        return "login page";   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // return "HOME";   
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show the form
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //submit the form
        $this->validate(request(),[
            'title'=>'required|min:3|max:20',
            'description'=>'required'
        ],[
            'title.required'=>'please enter the name of the product'
        ]);

        // save to database
        // way 1
        // return redirect()->back();
        
        // way 2
        return back()->with('message','Your product was created successfully');

        // way 3 call the link you want to
        // return redirect('/product');

        // way 4
        // return redirect()->route('product.index')

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

    public function product(){
        // $products = [];
        $products = ['name'=>'iphone','price'=>799];
        // return view('home',['products'=>$products]);
        return view('home',compact('products'));
    }
}
