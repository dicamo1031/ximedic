<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">

        <div class="box-header">
            <center> <h1><font size="20" face="JasmineUPC" color="#000"> DONANTE </font></h1></center>
        </div>
        <div class="box-content">
          <div class="container tablepa" role="grid">
              {{Form::open(["class"=>"form-horizontal"])}}
              <fieldset>
                <div class="container">
                  <table class="table table-hover table-striped table-condensed tableTamanio">
                    <thead class="table_color">
                      <tr>
                        <th> <font size ="3" color ="#fff"> Nombre Donante </font></th>
                        <th > <font size ="3" color ="#fff"> Telefono </font></th>
                        <th > <font size ="3" color ="#fff"> Tipo de Documento </font></th>
                        <th > <font size ="3" color ="#fff"> Numero documento </font></th>
                        <th > <font size ="3" color ="#fff"> Actualizar </font></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($donantes as $donante)
                      <tr BGCOLOR=#C4C4C4>
                        <td> {{$donante->Nombre}}</td>
                        <td>{{$donante->Telefono}}</td>
                        <td>{{$donante->TipoDocumento}}</td>
                        <td>{{$donante->idDocumento}}</td>
                        <td>
                          {{HTML::link("Donante/update/$donante->idDonante", "", "Class='icon-edit'")}}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!--panador-->
                {{$donantes->links() }}
              </fieldset>

              {{Form::close()}}

          </div>
          <div class="row-fluid">
            <!--paginador-->
            <div class="dataTables_paginate paging_bootstrap pagination">

              {{ $donantes->links()}}
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
