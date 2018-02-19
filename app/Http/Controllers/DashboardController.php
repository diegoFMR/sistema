<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bodeguero()
    {
    	if (Auth::check()) {
	    	if (Auth::user()->tipoUsuario_id === 1 || Auth::user()->tipoUsuario_id === 5) {
	    		return view('bodega/dashboard');
	    	} else {
	    		return view('auth/401');
	    	}
    	} else {
    		redirect()->route('/');
    	}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(Almacen $almacen)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit(Almacen $almacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacen $almacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Almacen $almacen)
    {
        //
    }
}
