<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


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

        return response()->json(['data' => $aircraft,
            'status' => Response::HTTP_OK]);

       // return view('aircraft/index',compact('aircraft'));

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

        $aircraft=new \App\Aircraft();
        $aircraft->mnufacturer=$request->get('manufacturer');
        $aircraft->type=$request->get('type');
        $aircraft->weight=$request->get('weight');
        $aircraft->save();
        return response()->json(['status' => Response::HTTP_CREATED]);

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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

        $myAircraft = \App\Aircraft::find($id);
        $myAircraft->delete();
        return response()->json(['status' => Response::HTTP_OK]);

        //
    }
}
