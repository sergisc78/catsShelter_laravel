<?php

namespace App\Http\Controllers;

use App\addAdult;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * ADMIN´S HOME
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('admin.index');
    }


    /**
     * ADD AN ADULT CAT IN DATABASE
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addAdult()
    {
        return view ('admin.addAdult');
    }



    /**
     * SAVE A PROFILE PHOTO IN DATABASE
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // UPLOAD PHOTO

        $input = $request->all();

        $file = $request->file('image');

        if ($file) {

            $filename = $file->getClientOriginalName(); // PHOTO´S NAME

            $file->move('images', $filename);

            $input['image'] = $filename;
        }


        addAdult::create($input);
    }

    /**
     * SHOW ALL ADULT CATS OF DATABASE
     * 
     */

     public function showAdultCat()
    {
       $cats=addAdult::all();

       return view("admin.adultCats",compact('cats'));
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
}
