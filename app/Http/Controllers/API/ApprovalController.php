<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators=\App\Operator::all();

        return response()->json(['data' => $operators,
            'status' => Response::HTTP_OK]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $operator = new \App\Operator();
    $operator->name = $request->get('name');
    $operator->email = $request->get('email');
    $operator->address = $request->get('address');
    $operator->phone = $request->get('phone');
    $operator->save();

    return response()->json(['status' => Response::HTTP_CREATED]);
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
        $operator= \App\Operator::find($id);
        $operator->name = $request->get('name');
        $operator->email = $request->get('email');
        $operator->address = $request->get('address');
        $operator->phone = $request->get('phone');
        $operator->save();

        return response()->json(['status' => Response::HTTP_OK]);
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
        $operator = \App\Operator::find($id);
        $operator->delete();
        return response()->json(['status' => Response::HTTP_OK]);
    }
}
