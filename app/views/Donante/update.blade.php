@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
        <div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
          <div class="box span12">
            <div class="box-header">
              <center><h2><font size="20" face="JasmineUPC" > Actualizar Donante</font> </h2></center>
            </div>
            <div class="box-content">
              {{Form::open(["class"=>"form-horizontal"]) }}
              <center>
                <fieldset>

                  <!-- Text input-->
                  <div class="control-group">
                    <label class="col-md-5 control-label" for="nombre">Nombre donante: </label>
                    <div class="col-md-4">

                      {{ Form::text("nombre",
                      $donante->Nombre,
                      ["placeholder" => "Escriba Nombre donante",
                      "id" => "nombre",
                      "class" => "form-control input-md"]
                      )
                    }}
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("nombre") }}</strong>
                  </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                  <label class="col-md-5 control-label" for="telefono">Telefono:</label>
                  <div class="col-md-4">

                    {{ Form::text("telefono",
                    $donante->Telefono,
                    ["placeholder" => "Numero Telefono",
                    "id" => "telefono",
                    "class" => "form-control input-md"]
                    )
                  }}
                  <!--Errores de validacion:-->
                  <strong class="alert-danger col-md-12 ">{{ $errors->first("telefono") }}</strong>

                </div>
              </div>

              <div class="control-group">
                <label class="col-md-5 control-label" for="doc">Documento:</label>
                <div class="col-md-4">
                  <select class="form-control" id="doc" name="doc" required="">
                    <option  data-value="1">Tarjeta de Identidad</option>
                    <option  data-value="2">Cedula de Ciudadania</option>
                    <option  data-value="3">Extranjeria</option>
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="col-md-5 control-label" for="direccion">Numero documento:</label>
                <div class="col-md-4">

                  {{ Form::text("iddoc",
                  $donante->idDocumento,
                  ["placeholder" => "Numero docuemto",
                  "id" => "iddoc",
                  "class" => "form-control input-md"]
                  )
                }}
                <!--Errores de validacion:-->
                <strong class="alert-danger col-md-12 ">{{ $errors->first("iddoc") }}</strong>
              </div>
            </div>

            <!-- Button -->
            <div class="form-actions">
              <label class="col-md-6 control-label" for="singlebutton"></label>
              <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
              </div>
            </div>

          </fieldset>
              </center>
              {{ Form::close()}}
            </div>
          </div>
        </div>
@endsection


<!DOCTYPE html>
