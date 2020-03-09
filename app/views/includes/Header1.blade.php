<head>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="logo">
            {{HTML::image('imagenes/Logo1.gif','logo',array('width'=>'300', 'height'=>'100','name'=>'logo'))}}
        </div>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a href="#" data-toggle="modal" data-target="#login-modal">Ingresa</a>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="loginmodal-container">
                        <h1>Login to Your Account</h1><br>
                        <form>
                            <input type="text" name="user" placeholder="Username">
                            <input type="password" name="pass" placeholder="Password">
                            <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                        </form>

                        <div class="login-help">
                            <a href="#">Register</a> - <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="modal" data-target="#squarespaceModal" id="myimg">modal</a>

            <!-- line modal -->
            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
                        </div>
                        <div class="modal-body">

                            <!-- content goes here -->
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                                </div>
                                <div class="btn-group btn-delete hidden" role="group">
                                    <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                <!-- /input-group -->
                </li>
                <li>
                  <a href="http://localhost/_ximedic/public/medicamentos"><i class="fa fa-home fa-fw"></i> Inicio</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-reorder fa-fw"></i> Categorias de medicamentos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="categoria/insert">Registrar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../categoria/insert">Registrar</a>';
                              } else {
                                  echo '<a href="../categoria/insert">Registrar</a>';
                              }
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="categoria">Consultar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../categoria">Consultar</a>';
                              } else {
                                  echo '<a href="../categoria">Consultar</a>';
                              }
                            }
                            ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                          <a href="#"><i class="fa fa-medkit fa-fw"></i> Gestión de medicamentos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="medicamentos/insert">Registrar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../medicamentos/insert">Registrar</a>';
                              } else {
                                  echo '<a href="../medicamentos/insert">Registrar</a>';
                              }
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="medicamentos">Consultar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../medicamentos">Consultar</a>';
                              } else {
                                  echo '<a href="../medicamentos">Consultar</a>';
                              }
                            }
                            ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                          <a href="#"><i class="fa fa-file-text fa-fw"></i> Pedidos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="pedido/insert">Registrar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../pedido/insert">Registrar</a>';
                              } else {
                                  echo '<a href="../pedido/insert">Registrar</a>';
                              }
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="pedido">Consultar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../pedido">Consultar</a>';
                              } else {
                                  echo '<a href="../pedido">Consultar</a>';
                              }
                            }
                            ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-plus-square fa-fw"></i> Suministro<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="suministro/insert">Registrar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../suministro/insert">Registrar</a>';
                              } else {
                                  echo '<a href="../suministro/insert">Registrar</a>';
                              }
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            $direccion = $_SERVER['REQUEST_URI'];
                            $cadena_buscada = 'insert';
                            $cadena_buscada2 = 'update';

                            $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                            $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                            if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                                echo '<a href="suministro">Consultar</a>';
                            } else {
                              if ($posicion_coincidencia === false) {
                                  echo '<a href="../../suministro">Consultar</a>';
                              } else {
                                  echo '<a href="../suministro">Consultar</a>';
                              }
                            }
                            ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-file-text-o   fa-fw"></i> Kardex<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="kardex/insert">Registrar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../kardex/insert">Registrar</a>';
                            } else {
                                echo '<a href="../kardex/insert">Registrar</a>';
                            }
                          }
                          ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-truck fa-fw"></i> Proveedor<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="proveedor/insert">Registrar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../proveedor/insert">Registrar</a>';
                            } else {
                                echo '<a href="../proveedor/insert">Registrar</a>';
                            }
                          }
                          ?>
                        </li>
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="proveedor">Consultar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../proveedor">Consultar</a>';
                            } else {
                                echo '<a href="../proveedor">Consultar</a>';
                            }
                          }
                          ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->

                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>Compras<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="compra/insert">Registrar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../compra/insert">Registrar</a>';
                            } else {
                                echo '<a href="../compra/insert">Registrar</a>';
                            }
                          }
                          ?>
                        </li>
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="compra">Consultar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../compra">Consultar</a>';
                            } else {
                                echo '<a href="../compra">Consultar</a>';
                            }
                          }
                          ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-male fa-fw"></i> Donante<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="Donante/insert">Registrar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../Donante/insert">Registrar</a>';
                            } else {
                                echo '<a href="../Donante/insert">Registrar</a>';
                            }
                          }
                          ?>
                        </li>
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="Donante">Consultar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../Donante">Consultar</a>';
                            } else {
                                echo '<a href="../Donante">Consultar</a>';
                            }
                          }
                          ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-smile-o fa-fw"></i> Donacion<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Registrar</a>
                        </li>
                        <li>
                            <a href="#">Consultar</a>
                        </li>
                        <li>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa  fa-barcode fa-fw"></i> Lotes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="lotes/insert">Registrar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../lotes/insert">Registrar</a>';
                            } else {
                                echo '<a href="../lotes/insert">Registrar</a>';
                            }
                          }
                          ?>
                        </li>
                        <li>
                          <?php
                          $direccion = $_SERVER['REQUEST_URI'];
                          $cadena_buscada = 'insert';
                          $cadena_buscada2 = 'update';

                          $posicion_coincidencia = strpos($direccion, $cadena_buscada);
                          $posicion_coincidencia2 = strpos($direccion, $cadena_buscada2);

                          if ($posicion_coincidencia === false && $posicion_coincidencia2 === false) {
                              echo '<a href="lotes">Consultar</a>';
                          } else {
                            if ($posicion_coincidencia === false) {
                                echo '<a href="../../lotes">Consultar</a>';
                            } else {
                                echo '<a href="../lotes">Consultar</a>';
                            }
                          }
                          ?>
                        </li>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
</head>
