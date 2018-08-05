<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications=\App\Application::all();
       // return view('index',compact('application/index'));
        return view('application/index',compact('applications'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new \App\Application();
        $application->OperatorID=$request->get('OperatorID');
        $application->AircraftID=$request->get('AircraftID');
        $application->RegistrationNumber=$request->get('RegistrationNumber');
        $application->CallSign=$request->get('CallSign');
        $application->Route=$request->get('Route');
        $application->FromDate=$request->get('FromDate');
        $application->ToDate=$request->get('ToDate');
        $application->save();

        return redirect('applications')->with('success', 'Information has been added');

        //
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
        $application = \App\Application::find($id);
        return view('application/edit',compact('application', 'id'));
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
        $application= \App\Application::find($id);
        $application->OperatorID=$request->get('OperatorID');
        $application->AircraftID=$request->get('AircraftID');
        $application->RegistrationNumber=$request->get('RegistrationNumber');
        $application->CallSign=$request->get('CallSign');
        $application->Route=$request->get('Route');
        $application->FromDate=$request->get('FromDate');
        $application->ToDate=$request->get('ToDate');
        $application->save();
        return redirect('applications');

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
        $application = \App\Application::find($id);
        $application->delete();
        return redirect('applications')->with('success','Information has been  deleted');

        //
    }
}
