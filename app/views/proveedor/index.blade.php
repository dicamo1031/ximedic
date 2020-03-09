<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">

        <div class="box-header">
            <center> <h1><font size="20" face="JasmineUPC" color="#000"> PROVEEDOR </font></h1></center>
        </div>
        <div class="box-content">
          <div class="container tablepa" role="grid">
              {{Form::open(["class"=>"form-horizontal"])}}
                        <fieldset>

                              <div class="container tablepa">
                                <table class="table table-hover table-striped table-condensed tableTamanio">
                                    <thead class="table_color">
                                        <tr>
                                            <th> <font size ="3" color ="#fff"> Nombre Proveedor </font></th>
                                            <th > <font size ="3" color ="#fff"> Telefono </font></th>
                                            <th > <font size ="3" color ="#fff"> Direccion </font></th>
                                            <th> <font size ="3" color ="#fff">Actualizar</font> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($proveedores as $proveedor)
                                        <tr BGCOLOR=#C4C4C4>
                                            <td> {{ $proveedor->Nombre}}</td>
                                            <td>{{$proveedor->Telefono}}</td>
                                            <td>{{$proveedor->Direccion}}</td>
                                            <td>
                                                {{HTML::link("proveedor/update/$proveedor->idProveedor", "", "Class='icon-edit'")}}
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
