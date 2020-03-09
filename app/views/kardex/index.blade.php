<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">

        <div class="box-header">
            <center> <h1><font size="20" face="JasmineUPC" color="#000"> KARDEX </font></h1></center>
        </div>
        <div class="box-content">
          <div class="container tablepa" role="grid">
              {{Form::open(["class"=>"form-horizontal"])}}
              <fieldset>


                <div class="container">
                  <table class="table table-hover table-striped table-condensed tableTamanio">
                    <thead class="table_color">
                      <tr>
                        <th> <font size ="3" color ="#fff"> Tipo movimiento </font></th>
                        <th > <font size ="3" color ="#fff"> Fecha Kardex </font></th>
                        <th > <font size ="3" color ="#fff"> Id movimiento</font></th>
                        <th > <font size ="3" color ="#fff"> Cantidad </font></th>
                        <th> <font size ="3" color ="#fff">Actualizar</font> </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($kardexs as $kardex)
                      <tr BGCOLOR=#C4C4C4>
                        <td> {{$kardex->tipoMovimiento}}</td>
                        <td>{{$kardex->FechaKardex}}</td>
                        <td>{{$kardex->idMovimiento}}</td>
                        <td>{{$kardex->cantidad}}</td>
                        <td>
                          {{HTML::link("kardex/update/$kardex->idKardex", "", "Class='icon-edit'")}}
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

              {{ $kardexs->links()}}
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
