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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function llantero()
    {
    	if (Auth::check()) {
	    	if (Auth::user()->tipoUsuario_id === 1 || Auth::user()->tipoUsuario_id === 4) {
	    		return view('llantero/dashboard');
	    	} else {
	    		return view('auth/401');
	    	}
    	} else {
    		redirect()->route('/');
    	}
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
    	if (Auth::check()) {
	    	if (Auth::user()->tipoUsuario_id === 1 || Auth::user()->tipoUsuario_id === 3) {
	    		return view('admin/dashboard');
	    	} else {
	    		return view('auth/401');
	    	}
    	} else {
    		redirect()->route('/');
    	}
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function root()
    {
    	if (Auth::check()) {
	    	if (Auth::user()->tipoUsuario_id === 1 || Auth::user()->tipoUsuario_id === 2) {
	    		return view('root/dashboard');
	    	} else {
	    		return view('auth/401');
	    	}
    	} else {
    		redirect()->route('/');
    	}
    }
}
