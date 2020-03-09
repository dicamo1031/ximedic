<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title> Ver Medicamento</title>
    </head>
    <header>
        <img src="imagenes/ximedicletra.jpg" width="180" height="70"/>   <p>
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
                <center> <h1><font size="20"face="JasmineUPC" color="#666"> MEDICAMENTOS </font> </h1>
                    <br>

            </legend>

            <div class="container">
                <div class="row">
                    <section class="col-md-4 col-sm-4 col">
                        {{Form::open(["class"=>"form-horizontal"])}}
                        <fieldset>

                            
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead>
                                        <tr BGCOLOR="#01617B">

                                          <th> <font size ="3" color ="#fff">Nombre del Medicamento </font></th>
                                          <th> <font size ="3" color ="#fff">Via </font></th>
                                          <th> <font size ="3" color ="#fff">Laboratorio </font></th>
                                          <th> <font size ="3" color ="#fff">Cantidad Miligramos </font></th>
                                          <th> <font size ="3" color ="#fff">Categoria </font></th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($medicamento as $medicamentos)
                                        <tr  BGCOLOR=#C4C4C4>

                                          <td>{{ $medicamentos->Nombre}}</td>
                                          <td>{{ $medicamentos->Via}}</td>
                                          <td>{{ $medicamentos->Laboratorio}}</td>
                                          <td>{{ $medicamentos->cantidadDosis}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>



                        </fieldset>
                        {{Form::close()}}
                    </section>
                </div>
            </div>
        </div>
        <footer style="margin-top:35%; margin-bottom:3%;"><br><br><hr>
          <center>  <p>
            Centro Geriatrico San Pedro Claver -   Direccion:  -   Telefono:
          </p>
          <center>
        </footer>
    </body>
</html>
