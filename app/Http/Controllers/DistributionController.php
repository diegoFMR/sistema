<?php

namespace App\Http\Controllers;

use App\Distribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

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
        return view('distribution.add')->with('distribution', $distribution);
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
            $distribution = new Distribution;
            $distribution->name = $request->name;
            $distribution->save();
            return Redirect::to('llantero/dashboard/distribuciones')->with('message', 'Distribucion agregada.');
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
    public function edit(int $distribution)
    {
        //
        $distribution = Distribution::find($distribution);
        return view('distribution.edit')->with('distribution', $distribution);

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
            'name' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add-construccion')
                ->withErrors($validator);
        }
        else {
            $distribution = Distribution::find($request->id);
            $distribution->name = $request->name;
            $distribution->save();
            return Redirect::to('llantero/dashboard/distribuciones')->with('message', 'Distribucion editada exitosamente.');
        }
    }
}
