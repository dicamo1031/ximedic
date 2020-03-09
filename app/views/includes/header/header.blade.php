<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html">
              <span>
                <div class="logo">
                  {{HTML::image('imagenes/Logo1.gif','logo',array('width'=>'150', 'height'=>'50','id'=>'logo'))}}
                </div>
              </span>
            </a>
            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon user"></i> {{ $usuario }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Opciones</span>
                            </li>
                            <li>{{HTML::link("Usuario/update/$usuario","perfil")}}</li>
                            <li><a href="../medicamentos/user/{{$usuario}}"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href={{action("UsuarioController@getUpdate")}}><i class="halflings-icon off"></i> </a></li>
                            <li><a href={{action("UsuarioController@getInsert")}}><i class="halflings-icon off"></i>  Agregar usuario</a></li>

                            <li><a href={{action("LoginController@getLogout")}}><i class="halflings-icon off"></i>  Cerrar Sesion</a></li>

                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->
