@extends('layouts.app')

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
                                      <input placeholder="Usuario" id="username" type="text" class="validate" name="username">
                                      <label for="username">Nombre de Usuario</label>
                                    </div>
                                    </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input placeholder="Password" id="password" type="password" class="validate" name="password">
                                      <label for="password">Password</label>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 center-align">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                                loguearse
                                                <i class="material-icons right">account_box</i>
                                            </button>
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
