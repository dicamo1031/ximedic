<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
      <center> <h1><font size="20" face="JasmineUPC" color="#000"> CATEGORIAS DE MEDICAMENTOS </font></h1></center>
    </div>
    <div class="box-content">
      <div class="container tablepa" role="grid">
        {{Form::open(["class"=>"form-horizontal"])}}
          <fieldset>
            <div class="container">
              <table class="table table-hover table-striped table-condensed tableTamanio">
                <thead class="table_color">
                  <tr>
                    <th> <font size ="3" color ="#fff"> Id </font></th>
                    <th> <font size ="3" color ="#fff"> Nombre </font></th>
                    <th> <font size ="3" color ="#fff"> Actualizar </font></th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($categorias as $categoria)
                  <tr  BGCOLOR=#C4C4C4>

                    <td>{{ $categoria->idCategoriaMedicamento}}</td>
                    <td>{{ $categoria->Nombre}}</td>
                    <td>
                      {{HTML::link("categorias/update/$categoria->idCategoriaMedicamento", "", "Class='icon-edit'")}}
                    </td>
                @endforeach


              </tbody>
            </table>
          </div>
          </fieldset>
        {{Form::close()}}
      </div>
  </div>
</div>
@endsection
