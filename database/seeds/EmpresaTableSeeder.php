<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Empresa;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empresa_prueba = new Empresa();
        $empresa_prueba->descripcion = "Empresa 1";
        $empresa_prueba->vigente = 1;
        $empresa_prueba->fecha_facturacion = Carbon::createFromDate(2017,12,31)->toDateTimeString();
        $empresa_prueba->ultimo_pago = Carbon::createFromDate(2017,11,01);
        $empresa_prueba->created_at = Carbon::now();
        $empresa_prueba->updated_at = Carbon::now();
        $empresa_prueba->save();

        $empresa_default = new Empresa();
        $empresa_default->descripcion = "Para guardar administradores globales";
        $empresa_default->vigente = 1;
        $empresa_default->fecha_facturacion = Carbon::createFromDate(2017,12,31)->toDateTimeString();
        $empresa_default->ultimo_pago = Carbon::createFromDate(2017,11,01);
        $empresa_default->created_at = Carbon::now();
        $empresa_default->updated_at = Carbon::now();
        $empresa_default->save();
    }
}
