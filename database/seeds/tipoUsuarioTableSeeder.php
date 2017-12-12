<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\tipoUsuario;

class tipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $superAdmin_tipoUsuario = new tipoUsuario();
        $superAdmin_tipoUsuario->descripcion = "Administrador de las instancias";
        $superAdmin_tipoUsuario->created_at = Carbon::now();
        $superAdmin_tipoUsuario->updated_at = Carbon::now();
        $superAdmin_tipoUsuario->save();

        $globalAdmin_tipoUsuario = new tipoUsuario();
        $globalAdmin_tipoUsuario->descripcion = "Administrador del sistema";
        $globalAdmin_tipoUsuario->created_at = Carbon::now();
        $globalAdmin_tipoUsuario->updated_at = Carbon::now();
        $globalAdmin_tipoUsuario->save();

        $Admin_tipoUsuario = new tipoUsuario();
        $Admin_tipoUsuario->descripcion = "Administrador de instancia";
        $Admin_tipoUsuario->created_at = Carbon::now();
        $Admin_tipoUsuario->updated_at = Carbon::now();
        $Admin_tipoUsuario->save();

        $llantero_tipoUsuario = new tipoUsuario();
        $llantero_tipoUsuario->descripcion = "Llantero de instancia";
        $llantero_tipoUsuario->created_at = Carbon::now();
        $llantero_tipoUsuario->updated_at = Carbon::now();
        $llantero_tipoUsuario->save();

        $encargadoDeBodega_tipoUsuario = new tipoUsuario();
        $encargadoDeBodega_tipoUsuario->descripcion = "Encargado de bodega de instancia";
        $encargadoDeBodega_tipoUsuario->created_at = Carbon::now();
        $encargadoDeBodega_tipoUsuario->updated_at = Carbon::now();
        $encargadoDeBodega_tipoUsuario->save();
    }
}
