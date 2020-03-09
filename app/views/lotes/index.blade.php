<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">


      <div class="box-header">
          <center> <h1><font size="20" face="JasmineUPC" color="#000"> LOTES </font></h1></center>
      </div>
            <div class="box-content">

                        <div class="container tablepa" role="grid">
                        {{Form::open(["class"=>"form-horizontal"])}}
                        <fieldset>


                          <div class="container tablepa">
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead class="table_color">
                                        <tr>

                                            <th> <font size ="3" color ="#fff">Fecha Vencimiento </font></th>
                                            <th> <font size ="3" color ="#fff">Fecha Ingreso </font></th>
                                            <th> <font size ="3" color ="#fff">Documento </font></th>
                                            <th> <font size ="3" color ="#fff"> Cantidad </font></th>
                                            <th> <font size ="3" color ="#fff">Actualizar</font> </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lotes as $lotes)
                                        <tr>
                                            <td>{{ $lotes->FechaVencimiento}}</td>
                                            <td>{{ $lotes->FechaIngreso}}</td>
                                            <td>{{ $lotes->nDocumento}}</td>
                                            <td>{{ $lotes->cantidad}}</td>
                                            <td>
                                                {{HTML::link("lotes/update/$lotes->idLotes", "", "Class='icon-edit'")}}
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        {{Form::close()}}

                      </div>
                      <div class="row-fluid">
                        <!--paginador-->
                        <div class="dataTables_paginate paging_bootstrap pagination">

                        </div>
                      </div>
                    </div>
                </div>
            </div>
            @endsection
@endsection
