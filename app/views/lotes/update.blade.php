@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
        <div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
          <div class="box span12">
            <div class="box-header">
              <center><h2><font size="20" face="JasmineUPC" > Actualizar Lote</font> </h2></center>
            </div>
            <div class="box-content">
              {{Form::open(["class"=>"form-horizontal"]) }}
              <center>
                <section class="col col-md-6">
                  <!-- Campo Cantidad -->
                  <div class="control-group">
                    <label class="col-md-7 control-label" for="fechavencimiento">Fecha de Vencimiento</label>
                    <div class="col-md-4">
                      {{Form::text("fechavencimiento",
                      $lotes->FechaVencimiento,
                      ["placeholder" => "Aqui Nombre",
                      "id" => "fechavencimiento",
                      "class" => "form-control input-md"]
                      )
                    }}
                  </div>
                </div>

                <!-- Campo Frecuencia -->
                <div class="control-group">
                  <label class="col-md-7 control-label" for="fechaingreso">Fecha de Ingreso</label>
                  <div class="col-md-4">
                    {{Form::text("fechaingreso",
                    $lotes->FechaIngreso,
                    ["placeholder" => "Aqui Nombre",
                    "id" => "fechaingreso",
                    "class" => "form-control input-md"]
                    )
                  }}
                </div>
              </div>

              <!-- Campo Dosis -->
              <div class="control-group">
                <label class="col-md-3 control-label" for="documento">Documento</label>
                <div class="col-md-4">
                  {{Form::text("documento",
                  $lotes->nDocumento,
                  ["placeholder" => "Aqui Nombre",
                  "id" => "documento",
                  "class" => "form-control input-md"]
                  )
                }}
              </div>
            </div>

            <!-- Campo Via -->
            <div class="control-group">
              <label class="col-md-3 control-label" for="cantidad">Cantidad</label>
              <div class="col-md-4">
                {{Form::text("cantidad",
                $lotes->cantidad,
                ["placeholder" => "Aqui Nombre",
                "id" => "cantidad",
                "class" => "form-control input-md"]
                )
              }}
            </div>
          </div>

          <!-- Button -->
          <div class="form-actions">
            <label class="col-md-5 control-label" for="singlebutton"></label>
            <div class="col-md-5">
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
