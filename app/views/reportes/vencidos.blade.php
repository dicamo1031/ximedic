<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title> Medicamento Vencidos </title>
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
                <center> <h1><font size="20"face="JasmineUPC" color="#666"> MEDICAMENTOS VENCIDOS </font> </h1>
                    <br>

            </legend>

            <div class="container">
                <div class="row">
                    <section class="col-md-4 col-sm-4 col">
                        {{Form::open(["class"=>"form-horizontal"])}}
                        <fieldset>

                            <div class="container">
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead>
                                        <tr BGCOLOR="#44a5c0">

                                            <th> <font size ="3" color ="#fff">Fecha de vencimiento </font></th>
                                            <th> <font size ="3" color ="#fff">Nombre del Medicamento </font></th>
                                            <th> <font size ="3" color ="#fff">Via </font></th>
                                            <th> <font size ="3" color ="#fff">Laboratorio </font></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($medicamento as $medicamentos)
                                        <tr  BGCOLOR=#C4C4C4>
                                            <td>{{ $medicamentos->FechaVencimiento}}</td>
                                            <td>{{ $medicamentos->Nombre}}</td>
                                            <td>{{ $medicamentos->Via}}</td>
                                            <td>{{ $medicamentos->Laboratorio}}</td>


                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>

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
