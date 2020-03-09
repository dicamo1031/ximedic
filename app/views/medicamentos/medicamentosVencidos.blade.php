<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ver Medicamentos Vencidos</title>
        @include('includes.head')
    </head>
    <body>
        @include('includes.Header1')
        <div id="page-wrapper" style="min-height: 939px;">
    <legend>
                <center> <h1><font size="20"face="JasmineUPC" color="#000"> MEDICAMENTOS VENCIDOS </font> </h1>
                </center>
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
                                        <tr BGCOLOR="#01617B">

                                            <th> <font size ="3" color ="#fff">Nombre del Medicamento </font></th>
                                            <th> <font size ="3" color ="#fff">Categoria </font></th>
                                            <th> <font size ="3" color ="#fff">Cantidad medicamentos </font></th>
                                            <th> <font size ="3" color ="#fff">Fecha Vencimiento </font></th>
                                          

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($medicamento as $medicamentos)
                                        <tr  BGCOLOR=#C4C4C4>

                                            <td>{{ $medicamentos->Nombre}}</td>
                                            <td>{{ $medicamentos->CategoriaMedicamento_idCategoriaMedicamento}}</td>
                                            <td>{{ $medicamentos->cantidadMinima}}</td>
                                            <td>{{ $medicamentos->Existencias}}</td>
                                            
                                          
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!--paginador-->
                            {{ $medicamento->links()}}
                        </fieldset>
                        {{Form::close()}}
                    </section>
                </div>
            </div>
        </div>
       @include('includes.footer')
    </body>
</html>
