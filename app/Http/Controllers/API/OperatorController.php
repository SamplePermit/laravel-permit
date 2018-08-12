<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators=\App\Operator::all();


      //  return view('operator/index',compact('operators'));

        return response()->json(array('data' => $operators,
            'status' => Response::HTTP_OK));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operator/create');
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

     //   return redirect('operators')->with('success', 'Information has been added');

        return response()->json(['status' => Response::HTTP_CREATED]);
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
        $operator = \App\Operator::find($id);
      //  return view('operator/edit',compact('operator','id'));

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
        $operator= \App\Operator::find($id);
        $operator->name = $request->get('name');
        $operator->email = $request->get('email');
        $operator->address = $request->get('address');
        $operator->phone = $request->get('phone');
        $operator->save();

   //     return redirect('operators');
        return response()->json(['status' => Response::HTTP_CREATED]);
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
       // return redirect('operators')->with('success','Information has been  deleted');

        return response()->json(['status' => Response::HTTP_OK]);
    }
}
