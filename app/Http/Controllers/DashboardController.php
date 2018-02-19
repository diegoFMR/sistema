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
}
