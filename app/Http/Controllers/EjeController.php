<?php

namespace App\Http\Controllers;

use App\Eje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class EjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ejes = Eje::all();
        return view('eje.index')
            ->with('ejes', $ejes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $eje = new Eje;
        return view('eje.add')->with('eje', $eje);
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
        $rules = array(
            'name' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add-construccion')
                ->withErrors($validator);
        }
        else {
            $eje = new Eje;
            $eje->name = $request->name;
            $eje->save();
            return Redirect::to('llantero/dashboard/eje')->with('message', 'Construccion agregada.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function show(eje $eje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function edit(int $eje)
    {
        //
        $eje = Eje::find($eje);
        return view('eje.edit')->with('eje', $eje);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eje $eje)
    {
        //
        $rules = array(
            'name' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add-construccion')
                ->withErrors($validator);
        }
        else {
            $eje = Eje::find($request->id);
            $eje->name = $request->name;
            $eje->save();
            return Redirect::to('llantero/dashboard/eje')->with('message', 'Construccion editada exitosamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function destroy(eje $eje)
    {
        //
    }
}
