@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
      <center><h2><font size="20" face="JasmineUPC" > DONACIONES </font> </h2></center>
    </div>
    <div class="box-content">
      {{Form::open(["class"=>"form-horizontal"]) }}
      <section class="col-md-4 col-sm-4 col">
        {{Form::open(["class"=>"form-horizontal"])}}
        <fieldset>


          <div class="container">
            <table class="table table-hover table-striped table-condensed tableTamanio">
              <thead>
                <tr BGCOLOR="#01617B">
                  <th> <font size ="3" color ="#fff"> ID </font></th>
                  <th > <font size ="3" color ="#fff"> Fecha </font></th>
                  <th > <font size ="3" color ="#fff"> Descripción </font></th>
                  <th > <font size ="3" color ="#fff"> Cantidad </font></th>
                  <th > <font size ="3" color ="#fff"> Categoria </font></th>
                  <th > <font size ="3" color ="#fff"> Medicamento </font></th>
                    <th> <font size ="3" color ="#fff"> Actualizar</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($donaciones as $Donacion)
                    <tr>
                      <td> {{$Donacion->idDonacion}}</td>
                      <td>{{$Donacion->Fecha}}</td>
                      <td>{{$Donacion->Descripcion}}</td>
                      <td>{{$Donacion->cantidad}}</td>
                      @foreach($Categoria as $cat)
                        @if($cat->idCategoriaMedicamento == $Donacion->Medicamento_CategoriaMedicamento_idCategoriaMedicamento)
                          <td>{{$cat->Nombre}}</td>
                        @endif
                      @endforeach
                      @foreach($medicamento as $med)
                        @if($med->idMedicamento == $Donacion->Donacion_idDonacion)
                          <td>{{$med->Nombre}}</td>
                        @endif
                      @endforeach

                      <td>
                        {{HTML::link("Donacion/update/$Donacion->idDonacion", "", "Class='icon-edit'")}}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </fieldset>
            {{Form::close()}}
          </section>
          {{ Form::close()}}
        </div>
      </div>
@endsection
