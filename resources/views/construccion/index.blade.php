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
                        <a href="{{ route('add-construccion') }}">Add</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Todas las construcciones
                </div>
                <table class="striped">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>construccion</th>
                          <th>Acciones</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach($construcciones as $construccion)
                          <tr>
                            <td>{{ $construccion->id }}</td>
                            <td>{{ $construccion->name }}</td>
                            <td>
                                <a href="{{route('edit-construccion', array('construccion' => $construccion->id)) }}"> <i class="tinny material-icons">edit</i> </a> 
                                <a href="{{ route('delete-construccion', array('construccion' => $construccion)) }}"> <i class="tinny material-icons">delete_forever</i> </a>
                            </td>
                          </tr>
                        @endforeach
                  </tbody>
                </table>
            </div>
        </div>

@endsection