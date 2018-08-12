<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        //return view('permit/index',compact('permits'));
        return response()->json(['data' => $permits,
            'status' => Response::HTTP_OK]);
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
        //

        $permit= new \App\Permit();
        $permit->ApprovalID=$request->get('ApprovalID');
        $permit->PermitNumber=$request->get('PermitNumber');
        $permit->ApplicationID=$request->get('ApplicationID');
        $permit->Charge=$request->get('Charge');
        $permit->save();

        return response()->json(['status' => Response::HTTP_CREATED]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
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
        //
        $permit= \App\permit::find($id);
        $permit->ApprovalID=$request->get('ApprovalID');
        $permit->PermitNumber=$request->get('PermitNumber');
        $permit->ApplicationID=$request->get('ApplicationID');
        $permit->Charge=$request->get('Charge');
        $permit->save();
        return response()->json(['status' => Response::HTTP_ACCEPTED]);
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
        return response()->json(['status' => Response::HTTP_GONE]);
    }
}
