<?php

namespace App\Http\Controllers;

use App\DistributionPositions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class DistributionPositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $distributionPositions = DistributionPositions::all();

        return view('distributionPositions.index')
            ->with('distributionPositions', $distributionPositions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $distributionPositions = new DistributionPositions;
        return view('distributionPositions.add')->with('distributionPositions', $distributionPositions);
        
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
            return Redirect::to('add_marca')
                ->withErrors($validator);
        }
        else {
            $distributionPositions = new DistributionPositions;
            $distributionPositions->name = $request->name;
            $distributionPositions->save();
            return Redirect::to('llantero/dashboard/posicionesDistribucion')->with('message', 'Posicion en Distribucion agregada.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(int $distributionPositions)
    {
        $distributionPositions = DistributionPositions::find($distributionPositions);
        return view('distributionPositions.edit')->with('distributionPositions', $distributionPositions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        
        $rules = array(
            'name' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add_marca')
                ->withErrors($validator);
        }
        else {
            $distributionPositions = DistributionPositions::find($request->id);
            $distributionPositions->name = $request->name;
            $distributionPositions->save();
            return Redirect::to('llantero/dashboard/posicionesDistribucion')->with('message', 'Posicion en Distribucion Editado.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function delete(Marca $marca)
    {
        
    }
}
