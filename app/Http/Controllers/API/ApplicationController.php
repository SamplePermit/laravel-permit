<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
       // return view('application/index',compact('applications'));
        return response()->json(['data' => $applications,
            'status' => Response::HTTP_OK]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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

        return response()->json(['status' => Response::HTTP_CREATED]);

        //
    }



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

        return response()->json(['status' => Response::HTTP_OK]);

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

        return response()->json(['status' => Response::HTTP_OK]);
        //
    }
}
