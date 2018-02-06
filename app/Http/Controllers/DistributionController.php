<?php

namespace App\Http\Controllers;

use App\Distribution;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $distributions = Distribution::all();
        return view('distribution.index')
            ->with('distributions', $distributions);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $distribution = new Distribution;
        $data = array(
            'distribution' => $distribution,
            'aplicacion' => Aplicacion::pluck('aplicacion', 'id'),
            'fabricantes' => Fabricante::pluck('name','id')
        );
        return view('distribution.add')->with('data', $data);
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
        //dd($request->all()['aplicacions'][0]);
        //dd($request->aplicacions[0]);
        $rules = array(
            'distribution' => 'required',
            'aplicacions' => 'required',
            'fabricantes' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add-construccion')
                ->withErrors($validator);
        }
        else {
            $distribution = new Distribution;
            $distribution->design = $request->design;
            $distribution->aplicacion_id = $request->aplicacions[0];
            $distribution->fabricante_id = $request->fabricantes[0];
            $distribution->save();
            return Redirect::to('bodega/dashboard/diseños')->with('message', 'Construccion agregada.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function edit(string $design)
    {
        //
        $distribution = Distribution::find($distribution);
        $data = array(
            'distribution' => $distribution,
            'aplicacion' => Aplicacion::pluck('aplicacion', 'id'),
            'fabricantes' => Fabricante::pluck('name','id')
        );
        return view('distribution.edit')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $design)
    {
        //
        $rules = array(
            'distribution' => 'required',
            'aplicacions' => 'required',
            'fabricantes' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add-construccion')
                ->withErrors($validator);
        }
        else {
            $distribution = Design::find($request->id);
            $distribution->design = $request->distribution;
            $distribution->aplicacion_id = $request->aplicacions[0];
            $distribution->fabricante_id = $request->fabricantes[0];
            $distribution->save();
            return Redirect::to('bodega/dashboard/diseños')->with('message', 'Construccion editada exitosamente.');
        }
    }
}
