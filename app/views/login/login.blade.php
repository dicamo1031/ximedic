<!DOCTYPE html>
<html>
    <head>
      @include('includes.head.head1')
      <title> Login </title>

    </head>

    <center>
        <br><br>
        <header>
            <img src="imagenes/ximedicletra.jpg" width="540" height="150"/>
            <hr>
        </header>

        <!--este campo se utilizara para validar el nombre de usuario-->
        <table class="Table"><br>

            {{Form::open()}}

            <div class="from-group col-md-12">
                <label  for="usuario" hidden="true">Usuario: </label><br>
                <input type="text" id="usuario"  name="usuario" class="form-control"  placeholder="Usuario" required="true" style=" text-align:center; height: 40px; width: 300px;"></input>
            </div>

            <!--este campo se utilizara para validar la contraseÃ±a-->
            <div class="from-group col-md-12">
                <label  for="password" hidden="true">Password: </label><br>
                <input type="password" id="password" name="password" class="form-control"  placeholder="Password" required="true" style=" text-align:center; height: 40px; width: 300px;"></input>
            </div>

            <div class="from-group col-md-12"><br>
                <input type="submit" class="btn btn-primary form-group" value="Ingresar"/>
                <input type="reset" class="btn btn-primary" name="clear" value="Borrar">
            </div>
            <div class="clearfix"></div>

            {{ Form::close() }}
            <br>

            <!--Verificacion secion cerrada-->
             @if (Session::has('error_message'))
             <div class="alert alert-success">
                 {{ Session::get('error_message') }}
             </div>
             @endif

            <!--Verificacion del mensaje-->
        @if (Session::has('error'))
            <p style="color:red">{{ Session::get('error') }}</p>
        @endif


        </table>
        <footer><br><br><hr>
            &copy;2016 <br/> <a href="http://www.sena.edu.co">www.sena.edu.co</a>
        </footer>
    </center>
</body>
</html>
