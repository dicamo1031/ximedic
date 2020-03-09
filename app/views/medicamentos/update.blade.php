@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
        <div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
          <div class="box span12">
            <div class="box-header">
              <center><h2><font size="20" face="JasmineUPC" > Actualizar Medicamento</font> </h2></center>
            </div>
            <div class="box-content">
              {{Form::open(["class"=>"form-horizontal"]) }}
              <center>
                  <section class="col col-md-6">
                      <!-- Text input-->
                      <div class="control-group">
                          <label class="col-md-7 control-label" for="Nombre">Nombre Del Medicamento</label>
                          <div class="col-md-4">
                              {{Form::text("Nombre",
                                   $medicamentos->Nombre,
                                  ["placeholder" => "",
                                   "id" => "Nombre",
                                   "class" => "form-control input-md"]
                                  )
                              }}
                              <!--Errores de validacion:-->
                              <strong class="alert-danger col-md-12 ">{{ $errors->first("Nombre") }}</strong>
                          </div>
                      </div>
                      <!-- Text input-->

                      <div class="control-group">
                          <label class="col-md-7 control-label" for="Via">Via</label>
                          <div class="col-md-4">
                              <select class="form-control" id="Via" name="Via" required="">
                                  <option  data-value="1">Via Oral</option>
                                  <option  data-value="2">Via Sublingual</option>
                                  <option  data-value="3">Via Topica</option>
                                  <option  data-value="4">Via Transdermica</option>
                                  <option  data-value="5">Via Oftamica</option>
                                  <option  data-value="6">Via Otica</option>
                                  <option  data-value="7">Via Intranasal</option>
                                  <option  data-value="8">Via Rectal</option>
                                  <option  data-value="9">Via Parental</option>
                              </select>
                          </div>
                      </div>

                      <!-- Text input-->
                      <div class="control-group">
                          <label class="col-md-7 control-label" for="Laboratorio">Laboratorio</label>
                          <div class="col-md-4">
                              {{Form::text("Laboratorio",
                                   $medicamentos->Laboratorio,
                                  ["placeholder" => "",
                                   "id" => "Laboratorio",
                                   "class" => "form-control input-md"]
                                  )
                              }}
                              <!--Errores de validacion:-->
                              <strong class="alert-danger col-md-12 ">{{ $errors->first("Laboratorio") }}</strong>
                          </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                          <label class="col-md-7 control-label" for="cantidadMinima">Cantidad Dosis</label>
                          <div class="col-md-4">
                              {{Form::text("cantidadDosis",
                                   $medicamentos->cantidadDosis,
                                  ["placeholder" => "",
                                   "id" => "cantidadDosis",
                                   "class" => "form-control input-md"]
                                  )
                              }}
                              <!--Errores de validacion:-->
                              <strong class="alert-danger col-md-12 ">{{ $errors->first("cantidadDosis") }}</strong>
                          </div>
                      </div>

                  
                      <!-- Text input-->
                      <div class="control-group">
                          <label class="col-md-7 control-label" for="CategoriaMedicamento_idCategoriaMedicamento">Categoria </label>
                          <div class="col-md-4">
                              <select class="form-control" id="CategoriaMedicamento_idCategoriaMedicamento" name="CategoriaMedicamento_idCategoriaMedicamento" required="">
                                  @foreach ($categorias as $categoria)
                                  <option data-value="{{ $categoria->idCategoriaMedicamento  }}"
                                          value="{{ $categoria->idCategoriaMedicamento  }}" >
                                      {{  $categoria->Nombre  }}

                                  </option>


                                  @endforeach
                              </select>
                          </div>
                      </div>

                      <!-- Button -->
                      <div class="form-actions">
                          <label class="col-md-6 control-label" for="singlebutton"></label>
                          <div class="col-md-6 ">
                              <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Guardar</button>
                              <button type="reset" class="btn-lg btn-warning" name="clear" value="Borrar">Borrar</button>

                          </div>
                      </div>
                  </section>
              </center>
              {{ Form::close()}}
            </div>
          </div>
        </div>
@endsection
