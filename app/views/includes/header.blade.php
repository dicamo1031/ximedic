
<header >
    <div class="wrapper">
        <div class="">
            {{HTML::image('imagenes/Logo1.gif','logo',array('width'=>'300', 'height'=>'100'))}}
            <nav>
                <a href="http://localhost/_ximedic/public/medicamentos"> Inicio </a>

                <a href="medicamentos"> Gestionar Medicamentos  </a>

                <a href="pedido"> Realizar Pedidos  </a>
                <a href="suministro"> Sumninistro </a>
                <a href="kardex"> Kardex  </a>
                <a href="proveedor"> Proveedor  </a>
                <a href="Donante"> Donantes  </a>
                <a href="compra"> Compra  </a>
                <a href="lotes"> Lotes  </a>
                <a href="#" data-toggle="modal" data-target="#squarespaceModal" >Registro de kardex</a>


                <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
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

        </div>
    </div>

</header>
