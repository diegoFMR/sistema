<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        {!! MaterializeCSS::include_full() !!}
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Logo</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
              </ul>
            </div>
          </nav>

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
                                <form class="col s12">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input placeholder="Usuario" id="username" type="text" class="validate">
                                      <label for="username">Nombre de Usuario</label>
                                    </div>
                                    </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input placeholder="Password" id="password" type="password" class="validate">
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
    </body>
</html>
