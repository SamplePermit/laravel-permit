<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $aircraft=\App\Aircraft::all();
        return view('aircraft/index',compact('aircraft'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aircraft/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $aircraft=new \App\Aircraft();
        $aircraft->mnufacturer=$request->get('manufacturer');
        $aircraft->type=$request->get('type');
        $aircraft->weight=$request->get('weight');
        $aircraft->save();

        return redirect('aircraft')->with('success', 'Information has been added');
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

        $aircraft = \App\Aircraft::find($id);
        return view('aircraft/edit',compact('aircraft','id'));


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


            $aircraft= \App\Aircraft::find($id);
            $aircraft->mnufacturer=$request->get('mnufacturer');
            $aircraft->type=$request->get('type');
            $aircraft->weight=$request->get('weight');

            $aircraft->save();
            return redirect('aircraft');


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

        $myAircraft = \App\Aircraft::find($id);
        $myAircraft->delete();
        return redirect('aircraft')->with('success','Information has been  deleted');

        //
    }
}
