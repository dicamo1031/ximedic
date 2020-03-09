<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
        <center> <h1><font size="20" face="JasmineUPC" color="#000"> COMPRA </font></h1></center>

    </div>
    <div class="box-content">
      <div class="row-fluid">
        <section class="col col-md-10">
          <center>
            <div class="col col-md-5">
                <button type="button"  class="btn btn-primary">{{ HTML::link ('report_compra',"Informe Compras PDF" )}}</button>
            </div>
            <br>
          </center>
        </section>
      </div>
      <div class="container tablepa" role="grid">
          {{Form::open(["class"=>"form-horizontal"])}}
          <fieldset>
            <div class="container">
              <table class="table table-hover table-striped table-condensed tableTamanio">
                <thead class="table_color">
                  <tr>
                    <th> <font size ="3" color ="#fff"> Numero Factura </font></th>
                    <th> <font size ="3" color ="#fff"> Fecha </font></th>
                    <th> <font size ="3" color ="#fff"> Valor Compra </font></th>
                    <th> <font size ="3" color ="#fff"> Cantidad </font></th>
                    <th> <font size ="3" color ="#fff"> Categoria </font></th>
                    <th> <font size ="3" color ="#fff"> Medicamento </font></th>
                    <th> <font size ="3" color ="#fff"> Actualizar</font> </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($compras as $compra)
                  <tr>
                    <td>{{ $compra->NFactura}}</td>
                    <td>{{ $compra->Fecha}}</td>
                    <td>{{ $compra->ValorTotal}}</td>
                    <td>{{ $compra->cantidad}}</td>
                    @foreach($Categoria as $cat)
                      @if($cat->idCategoriaMedicamento == $compra->Medicamento_CategoriaMedicamento_idCategoriaMedicamento)
                        <td>{{$cat->Nombre}}</td>
                      @endif
                    @endforeach
                    @foreach($medicamento as $med)
                      @if($med->idMedicamento == $compra->Compra_idCompra)
                        <td>{{$med->Nombre}}</td>
                      @endif
                    @endforeach
                    <td>
                      {{ HTML::link("compra/update/$compra->idCompra", "", "Class='icon-edit'") }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
          </fieldset>

          {{Form::close()}}
      </div>
    </div>
  </div>

    <div class="row-fluid">
      <!--paginador-->
      <div class="dataTables_paginate paging_bootstrap pagination">


      </div>
    </div>
</div>

@endsection
