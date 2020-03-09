<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">

        <div class="box-header">
            <center> <h1><font size="20" face="JasmineUPC" color="#000"> PEDIDOS </font></h1></center>
        </div>
        <div class="box-content">
          <div class="row-fluid">
            <section class="col col-md-10">
              <center>
                <div class="col col-md-5">
                  <button type="button"  class="btn btn-primary">{{ HTML::link ('report_pedido',"Informe Pedidos PDF" )}}</button>
                </div>
                <br>
              </center>
            </section>
          </div>
          <div class="container tablepa" role="grid">
              {{Form::open(["class"=>"form-horizontal"])}}
                        <fieldset>

                            <div class="container tablepa">
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead>
                                        <tr class="table_color">
                                            <th> <font size ="3" color ="#fff">Fecha </font></th>
                                            <th> <font size ="3" color ="#fff">Numero Pedido </font></th>
                                            <th> <font size ="3" color ="#fff">Medicamento</font> </th>
                                            <th> <font size ="3" color ="#fff">Actualizar</font> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pedidos as $pedido)
                                        <tr>
                                            <td>{{ $pedido->Fecha}}</td>
                                            <td>{{ $pedido->NumeroPedido}}</td>
                                            {{--*/$medicamento =$pedido->medicamentos()->getresults();/*--}}
                                            {{--*/$k = 1/*--}}
                                            <td>
                                              @foreach($medicamento as $m)
                                              @if($medicamento->count() >= $k)
                                              {{$m->Nombre}}
                                              {{--*/ $k++ /*--}}
                                              @endif
                                              @endforeach
                                            </td>
                                            <td>{{
                                              HTML::link("pedido/update/$pedido->idPedido", "", "Class='icon-edit'")
                                              }}
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
