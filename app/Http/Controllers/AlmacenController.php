<?php

namespace App\Http\Controllers;

use App\Almacen;
use App\Marca;
use App\Medida;
use App\Construccion;
use App\Tipo;
use App\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $almacens = Almacen::paginate(15);
        return view('almacen.index')
            ->with('almacens', $almacens);
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
        $rules = array(
            'marcas' => 'required',
            'medidas' => 'required',
            'dot' => 'required',
            'profundidad' => 'required',
            'construcciones' => 'required',
            'tipos' => 'required',
            'designs' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('add-construccion')
                ->withErrors($validator);
        }
        else {
            $llanta = new Almacen;
            $llanta->marca_id = $request->marcas[0];
            $llanta->medida_id = $request->medidas[0];
            $llanta->dot = $request->dot;
            $llanta->profundidad = $request->profundidad;
            $llanta->construccion_id = $request->construcciones[0];
            $llanta->tipo_id = $request->tipos[0];
            $llanta->design_id = $request->designs[0];
            $llanta->costo = $request->costo;
            $llanta->factura = $request->factura;
            $llanta->save();
            return Redirect::to('bodega/dashboard/almacen')->with('message', 'Llanta agregada.');
        }
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
     * Muestra formulario para comprar llanta.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function mostrarComprarLlanta(Almacen $almacen)
    {
        //
        $llanta = new Almacen;
        $data = array(
            'llanta' => $llanta,
            'marcas' => Marca::pluck('marca', 'id'),
            'medidas' => Medida::pluck('medida','id'),
            'construcciones' => Construccion::pluck('name', 'id'),
            'tipos' => Tipo::pluck('name', 'id'),
            'designs' => Design::pluck('design', 'id')
        );
        return view('almacen.comprar')->with('data', $data);
    }

    public function mostrarRegistrarLlanta(Almacen $almacen)
    {
        //
        $llanta = new Almacen;
        $data = array(
            'llanta' => $llanta,
            'marcas' => Marca::pluck('marca', 'id'),
            'medidas' => Medida::pluck('medida','id'),
            'construcciones' => Construccion::pluck('name', 'id'),
            'tipos' => Tipo::pluck('name', 'id'),
            'designs' => Design::pluck('design', 'id')
        );
        return view('almacen.registrar')->with('data', $data);
    }

    

    /**
     * Muestra formulario para editar llanta.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function mostrarEditLlanta(int $almacen)
    {
        $llanta = Almacen::find($almacen);
        $data = array(
            'llanta' => $llanta,
            'marcas' => Marca::pluck('marca', 'id'),
            'medidas' => Medida::pluck('medida','id'),
            'construcciones' => Construccion::pluck('name', 'id'),
            'tipos' => Tipo::pluck('name', 'id'),
            'designs' => Design::pluck('design', 'id')
        );
        return view('almacen.edit')->with('data', $data);
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
