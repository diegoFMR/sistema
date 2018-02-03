@extends('layouts.app')
<style>
  .padding-10 {
    padding: 10%;
  }

  .background-grey-blue {
    background-color: #374c67;
  }
</style>
@section('content')
<section>
            <div class="row padding-10 background-grey-blue">
                
              <div class="col s12">
                  <div class="col s6">
                      <h2 class="white-text">Deja la seguridad de tus llantas en nuestras manos.</h2>
                  </div>
                  <div class="col s6 ">
                      <div class="row">
                        <div class="col s12">
                          <div class="card width-100">
                            <div class="card-content" >
                              <div class="row " style="padding: 50px 0px 0px 0px;">
                                <form class="col s12" action="{{ url('/login') }}" method="POST">
                                    {{ csrf_field() }}
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input placeholder="Usuario" id="email" type="email" class="validate" name="email">
                                      <label for="email"  data-error="wrong" data-success="right">Nombre de Usuario</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input placeholder="Password" id="password" type="password" class="validate" name="password">
                                      <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s8 center-align">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                                loguearse
                                                <i class="material-icons right">account_box</i>
                                            </button>
                                        </div>
                                        <div class="col s4 center-align">
                                            <p>
                                              <input type="checkbox" class="filled-in" id="recordarme" checked="checked"  {{ old('remember') ? 'checked' : '' }} name="recordar" />
                                              <label for="recordarme">Mantener Logueo</label>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col s12 center-align">
                                            <a class="" href="{{ route('password.request') }}">
                                                Olvidaste tu contraseña?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </section>
@endsection
