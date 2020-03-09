<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">

        <div class="box-header">
            <center> <h1><font size="20" face="JasmineUPC" color="#000"> SUMINISTRO </font></h1></center>
        </div>
        <div class="box-content">
          <div class="container tablepa" role="grid">
                        {{Form::open(["class"=>"form-horizontal"])}}
                        <fieldset>

                          <div class="container tablepa">
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead class="table_color">
                                        <tr>
                                            <th><font size ="3" color ="#fff">Categoria</font></th>
                                            <th><font size ="3" color ="#fff">Medicamento</font></th>
                                            <th><font size ="3" color ="#fff">Cantidad</font></th>
                                            <th><font size ="3" color ="#fff">Frecuencia</font></th>
                                            <th><font size ="3" color ="#fff">Duracion</font></th>
                                            <th><font size ="3" color ="#fff">Observacion</font></th>
                                            <th><font size ="3" color ="#fff">Dosis</font></th>
                                            <th><font size ="3" color ="#fff">Via</font></th>
                                            <th><font size ="3" color ="#fff">Fecha Inicial</font></th>
                                            <th><font size ="3" color ="#fff">Servicio </font></th>
                                            <th> <font size ="3" color ="#fff">Actualizar</font> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($suministros as $suministro)
                                        <tr>
                                          @foreach($Categoria as $cat)
                                            @if($cat->idCategoriaMedicamento == $suministro->Medicamento_CategoriaMedicamento_idCategoriaMedicamento)
                                              <td>{{$cat->Nombre}}</td>
                                            @endif
                                          @endforeach
                                          @foreach($medicamento as $med)
                                            @if($med->idMedicamento == $suministro->Medicamento_idMedicamento)
                                              <td>{{$med->Nombre}}</td>
                                            @endif
                                          @endforeach
                                            <td>{{ $suministro->Cantidad}}</td>
                                            <td>{{ $suministro->Frecuencia}}</td>
                                            <td>{{ $suministro->Duracion}}</td>
                                            <td>{{ $suministro->Observacion}}</td>
                                            <td>{{ $suministro->Dosis}}</td>
                                            <td>{{ $suministro->Via}}</td>
                                            <td>{{ $suministro->FechaInicial}}</td>
                                            <td>{{ $suministro->Servicio}}</td>
                                            <td>
                                                {{ HTML::link("suministro/update/$suministro->idSuministro", "", "Class='icon-edit'") }}
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

                          {{ $suministros->links()}}
                        </div>
                      </div>
                    </div>
                </div>
              </div>
                @endsection
