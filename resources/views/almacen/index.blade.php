@extends('layouts.bodeguero.app')
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@section('content')
    @if(session()->has('message'))
        <div class="message" data-type="success" data-message="{{ session()->get('message') }}">

        </div>
    @endif
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content row">
                <div class="title m-b-md">
                    Almacen
                </div>
                <table class="striped col s10 offset-s1">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Marca</th>
                          <th>Medida</th>
                          <th>DOT</th>
                          <th>Profundidad</th>
                          <th>Construccion</th>
                          <th>Tipo</th>
                          <th>Diseño</th>
                          <th>Aplicación</th>
                          <th>Marca/Fabricante</th>
                          <th>Fecha</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach($almacens as $almacen)
                          <tr>
                            <td>{{ $almacen->id }}</td>
                            <td>{{ $almacen->marcas->marca }}</td>
                            <td>{{ $almacen->medidas->medida }}</td>
                            <td>{{ $almacen->dot }}</td>
                            <td>{{ $almacen->profundidad }}</td>
                            <td>{{ $almacen->construcciones->name }}</td>
                            <td>{{ $almacen->tipos->name }}</td>
                            <td>{{ $almacen->designs->design }}</td>
                            <td>{{ $almacen->designs->aplicaciones->aplicacion }}</td>
                            <td>{{ $almacen->designs->fabricantes->name }}</td>

                            <td>
                                <a href="{{route('edit-llanta', array('llanta' => $almacen->id)) }}"> <i class="tinny material-icons">edit</i> </a>  
                                <a href=""> <i class="tinny material-icons">delete_forever</i> </a>
                            </td>
                          </tr>
                        @endforeach


                  </tbody>
                </table>
                {{ $almacens->links() }}
            </div>
        </div>

@endsection