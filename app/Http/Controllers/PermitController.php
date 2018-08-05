<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permits=\App\Permit::all();
        //return view('index',compact('permits'));
        return view('permit/index',compact('permits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Permit/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $permit= new \App\Permit();
        $permit->ApprovalID=$request->get('ApprovalID');
        $permit->PermitNumber=$request->get('PermitNumber');
        $permit->ApplicationID=$request->get('ApplicationID');
        $permit->Charge=$request->get('Charge');
        $permit->save();

        return redirect('permits')->with('success', 'Information has been added');
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
        $permit = \App\Permit::find($id);
        return view('permit/edit',compact('permit','id'));
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
        $permit= \App\permit::find($id);
        $permit->ApprovalID=$request->get('ApprovalID');
        $permit->PermitNumber=$request->get('PermitNumber');
        $permit->ApplicationID=$request->get('ApplicationID');
        $permit->Charge=$request->get('Charge');
        $permit->save();
        return redirect('permits')->with('success', 'Information has been added');
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
        $permit = \App\Permit::find($id);
        $permit->delete();
        return redirect('permits')->with('success','Information has been  deleted');
    }
}
