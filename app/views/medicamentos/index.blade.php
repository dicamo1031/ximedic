<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div  class="row-fluid" id="page-wrapper" style="min-height: 639px;">
    <div class="box span12">

        <div class="box-header">
            <center> <h1><font id='font_title' size="20" face="titillium_websemibold" color="#ffffff"> MEDICAMENTOS </font></h1></center>
        </div>
        <div class="box-content">
          <div class="row-fluid">
            <section class="col col-md-10">
              <center>
                <div class="col col-md-5">
                    <button type="button"  class="btn btn-primary">{{ HTML::link ('pdf',"Informe Medicamentos PDF" )}}</button>
                </div>
                <br>
                <div class="col col-md-5">
                    <button type="button"  class="btn btn-primary">{{ HTML::link ('MedicamentosVencidos',"Medicamentos Vencidos PDF" )}}</button>
                </div>
                <br>
                <div class="col col-md-5">
                    <button type="button"  class="btn btn-primary">{{ HTML::link ('MedicamentosFaltantes',"Medicamentos Faltantes PDF" )}}</button>
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
                                  <thead class="table_color">
                                      <tr>
                                          <th> <font size ="3" color ="#fff">Nombre del Medicamento </font></th>
                                          <th> <font size ="3" color ="#fff">Via </font></th>
                                          <th> <font size ="3" color ="#fff">Laboratorio </font></th>
                                          <th> <font size ="3" color ="#fff">Cantidad Miligramos </font></th>
                                          <th> <font size ="3" color ="#fff">Categoria </font></th>
                                          <th> <font size ="3" color ="#fff"> Actualizar </font></th>
                                          <th> <font size ="3" color ="#fff">Ver </font></th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($medicamento as $medicamentos)
                                      <tr  BGCOLOR=#C4C4C4>

                                          <td>{{ $medicamentos->Nombre}}</td>
                                          <td>{{ $medicamentos->Via}}</td>
                                          <td>{{ $medicamentos->Laboratorio}}</td>
                                          <td>{{ $medicamentos->cantidadDosis}}</td>
                                          <td>{{ $categorias[$medicamentos->CategoriaMedicamento_idCategoriaMedicamento-1]['Nombre']}}</td>
                                          <td>
                                            {{ HTML::link("medicamentos/update/$medicamentos->idMedicamento", "", "Class='icon-edit'") }}</center>
                                          </td>
                                          <td>
                                              {{ HTML::link("#", "",array("Class"=>"icon-eye-open","data-toggle"=>"modal","data-target"=>"#squarespaceModal$medicamentos->idMedicamento")) }}
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
