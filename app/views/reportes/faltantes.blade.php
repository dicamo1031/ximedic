<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title> Ver Medicamento</title>
    </head>
    <header>
        <img src="imagenes/ximedicletra.jpg" width="180" height="70"/>
         <p>
             Centro de  Gestión de Mercados,
            Logística y Tecnologías de la Informacion.
          </p>

        <hr>
    </header>
    <body>

      <p>
          Fecha: <?php echo date(' L / M / Y')?>


      </p>
        <div id="page-wrapper" style="min-height: 939px;">

            <legend>
                <center> <h1><font size="20"face="JasmineUPC" color="#666"> MEDICAMENTOS FALTANTES</font> </h1>
                    <br>

            </legend>

                        {{Form::open(["class"=>"form-horizontal"])}}
                      

                            <div class="container">
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead>
                                        <tr BGCOLOR="#01617B">

                                            <th> <font size ="3" color ="#fff">Nombre del Medicamento </font></th>
                                            <th> <font size ="3" color ="#fff">Laboratorio </font></th>
                                            <th> <font size ="3" color ="#fff">fechaVencimiento </font></th>
                                            <th> <font size ="3" color ="#fff">FechaIngreo </font></th>
                                            <th> <font size ="3" color ="#fff">cantidad </font></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($medicamento as $medicamentos)
                                        <tr  BGCOLOR=#C4C4C4>

                                            <td>{{ $medicamentos->Nombre}}</td>
                                            <td>{{ $medicamentos->Laboratorio}}</td>
                                            <td>{{ $medicamentos->FechaVencimiento}}</td>
                                            <td>{{ $medicamentos->FechaIngreso}}</td>
                                            <td>{{ $medicamentos->cantidad}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>


                        {{Form::close()}}


        </div>
        <footer style="margin-top:35%; margin-bottom:3%;"><br><br><hr>
          <center>  <p>
            Centro Geriatrico San Pedro Claver -   Direccion:  -   Telefono:
          </p>
          <center>
        </footer>
    </body>
</html>
