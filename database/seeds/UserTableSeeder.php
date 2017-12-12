<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\tipoUsuario;
use App\User;
use App\Empresa;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $administrador_de_instancias = tipoUsuario::where('id', 1);
        $superadministrador_de_sistema = tipoUsuario::where('id', 2);
        $administrador_de_instancia = tipoUsuario::where('id', 3);
        $llantero = tipoUsuario::where('id', 4);
        $encargado_de_bodega = tipoUsuario::where('id', 5);

        $empresa = Empresa::where('id', 1);
        $empresa_global = Empresa::where('id', 2);

        $superadministrador = new User();
        $superadministrador->name = "SPAD";
        $superadministrador->email = "superadministrador@administracion.com";
        $superadministrador->password = bcrypt("superadministrador");
        
        //$superadministrador->empresas()->attach($empresa_global);
        //$superadministrador->tipoUsuarios()->attach($superadministrador_de_sistema);
        $superadministrador->save();

        $administrador_instancias = new User();
        $administrador_instancias->name = "AINS";
        $administrador_instancias->email = "administrador_instancias@administracion.com";
        $administrador_instancias->password = bcrypt("administrador_instancias");
        //$superadministrador->empresas()->attach($empresa);
        //$administrador_instancias->tipoUsuarios()->attach($administrador_de_instancias);
        $administrador_instancias->save();

        $administrador_instancia = new User();
        $administrador_instancia->name = "AIN";
        $administrador_instancia->email = "administrador_instancia@administracion.com";
        $administrador_instancia->password = bcrypt("administrador_instancia");
        //$superadministrador->empresas()->attach($empresa);
        //$administrador_instancia->tipoUsuarios()->attach($administrador_de_instancia);
        $administrador_instancia->save();

        $llantero = new User();
        $llantero->name = "LLNTR";
        $llantero->email = "llantero@administracion.com";
        $llantero->password = bcrypt("llantero");
        //$superadministrador->empresas()->attach($empresa);
        //$llantero->tipoUsuarios()->attach($llantero);
        $llantero->save();

        $encargado_bodega = new User();
        $encargado_bodega->name = "EDBG";
        $encargado_bodega->email = "encargado_bodega@administracion.com";
        $encargado_bodega->password = bcrypt("encargado_bodega");
        //$superadministrador->empresas()->attach($empresa);
        //$encargado_bodega->tipoUsuarios()->attach($encargado_de_bodega);
        $encargado_bodega->save();
    }
}
