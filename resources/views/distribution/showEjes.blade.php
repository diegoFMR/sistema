@extends('layouts.llantero.app')
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
                        <a href="{{ route('add-distribucion') }}">Add</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    DISTRIBUCION
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="col s3">
                            {{ $data["eje_name"] }}
                        </div>
                        <div class="col s6">
                            <div class="col s12">
                                <div class="col s12 delanteras">
                                    @foreach($data["ejes"] as $eje)
                                        @if ($eje->distribution_position_id === 1)
                                            @if ($eje->distribution_position_id === 1)
                                                
                                            @endif
                                            <div class="col s12">
                                                <td>{{ $eje->ejes->name }}</td>
                                                <td>{{ $eje->distribuciones->name }}</td>
                                                <td>{{ $eje->posicion }}</td>
                                                
                                                <td>{{ $eje->positions->name }}</td>
                                                <td>{{ $eje->distribution_position_id }}</td>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col s12 traseras">
                                    @foreach($data["ejes"] as $eje)
                                        @if ($eje->distribution_position_id === 2)
                                            <div class="col s12">
                                                <td>{{ $eje->ejes->name }}</td>
                                                <td>{{ $eje->distribuciones->name }}</td>
                                                <td>{{ $eje->posicion }}</td>
                                                
                                                <td>{{ $eje->positions->name }}</td>
                                                <td>{{ $eje->distribution_position_id }}</td>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection