<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\tipoUsuario;
use App\User;
use App\Empresa;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $administrador_de_instancias = tipoUsuario::where('id', 1)->first();
        $superadministrador_de_sistema = tipoUsuario::where('id', 2)->first();
        $administrador_de_instancia = tipoUsuario::where('id', 3)->first();
        $llantero_usuario = tipoUsuario::where('id', 4)->first();
        $encargado_de_bodega = tipoUsuario::where('id', 5)->first();

        $empresa = Empresa::where('id', 1)->first();

        $superadministrador = new User();
        $superadministrador->name = "SPAD";
        $superadministrador->email = "superadministrador@administracion.com";
        $superadministrador->password = bcrypt("superadministrador"); 
        $superadministrador->empresa_id = $empresa->id;
        $superadministrador->tipoUsuario_id = $superadministrador_de_sistema->id;
        $superadministrador->intentos_login = 0;
        $superadministrador->ultimo_logueo = date("Y-m-d H:i:s");
        $superadministrador->save();

        $administrador_instancias = new User();
        $administrador_instancias->name = "AINS";
        $administrador_instancias->email = "administrador_instancias@administracion.com";
        $administrador_instancias->password = bcrypt("administrador_instancias");
        $administrador_instancias->empresa_id = $empresa->id;
        $administrador_instancias->tipoUsuario_id = $administrador_de_instancias->id;
        $administrador_instancias->intentos_login = 0;
        $administrador_instancias->ultimo_logueo = date("Y-m-d H:i:s");
        $administrador_instancias->save();

        $administrador_instancia = new User();
        $administrador_instancia->name = "AIN";
        $administrador_instancia->email = "administrador_instancia@administracion.com";
        $administrador_instancia->password = bcrypt("administrador_instancia");
        $administrador_instancia->empresa_id = $empresa->id;
        $administrador_instancia->tipoUsuario_id = $administrador_de_instancia->id;
        $administrador_instancia->intentos_login = 0;
        $administrador_instancia->ultimo_logueo = date("Y-m-d H:i:s");
        $administrador_instancia->save();

        $llantero = new User();
        $llantero->name = "LLNTR";
        $llantero->email = "llantero@administracion.com";
        $llantero->password = bcrypt("llantero");
        $llantero->empresa_id = $empresa->id;
        $llantero->tipoUsuario_id = $llantero_usuario->id;
        $llantero->intentos_login = 0;
        $llantero->ultimo_logueo = date("Y-m-d H:i:s");
        $llantero->save();

        $encargado_bodega = new User();
        $encargado_bodega->name = "EDBG";
        $encargado_bodega->email = "encargado_bodega@administracion.com";
        $encargado_bodega->password = bcrypt("encargado_bodega");
        $encargado_bodega->empresa_id = $empresa->id;
        $encargado_bodega->tipoUsuario_id = $encargado_de_bodega->id;
        $encargado_bodega->intentos_login = 0;
        $encargado_bodega->ultimo_logueo = date("Y-m-d H:i:s");
        $encargado_bodega->save();
    }
}
