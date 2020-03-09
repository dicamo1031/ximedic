@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
        <div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
          <div class="box span12">
            <div class="box-header">
              <center><h2><font size="20" face="JasmineUPC" > Actualizar Suministro</font> </h2></center>
            </div>
            <div class="box-content">
              {{Form::open(["class"=>"form-horizontal"]) }}
              <center>
                <section class="col col-md-6">
                  <!-- Campo Cantidad -->
                  <div class="control-group">
                    <label class="col-md-7 control-label" for="cantidad">Cantidad</label>
                    <div class="col-md-4">
                      {{Form::text("cantidad",
                      $suministro->Cantidad,
                      ["placeholder" => "Aqui Nombre",
                      "id" => "cantidad",
                      "class" => "form-control input-md"]
                      )
                    }}
                  </div>
                </div>

                <!-- Campo Frecuencia -->
                <div class="control-group">
                  <label class="col-md-7 control-label" for="frecuencia">Frecuencia</label>
                  <div class="col-md-4">
                    {{Form::text("frecuencia",
                    $suministro->Frecuencia,
                    ["placeholder" => "Aqui Nombre",
                    "id" => "frecuencia",
                    "class" => "form-control input-md"]
                    )
                  }}
                </div>
              </div>

              <!-- Campo Duracion -->
              <div class="control-group">
                <label class="col-md-7 control-label" for="duracion">Duracion</label>
                <div class="col-md-4">
                  {{Form::text("duracion",
                  $suministro->Duracion,
                  ["placeholder" => "Aqui Nombre",
                  "id" => "duracion",
                  "class" => "form-control input-md"]
                  )
                }}
              </div>
            </div>

            <!-- Campo Observacion -->
            <div class="control-group">
              <label class="col-md-7 control-label" for="observacion">Observacion</label>
              <div class="col-md-4">
                {{Form::text("observacion",
                $suministro->Observacion,
                ["placeholder" => "Aqui Nombre",
                "id" => "observacion",
                "class" => "form-control input-md"]
                )
              }}
            </div>
          </div>


          <!-- Campo Dosis -->
          <div class="control-group">
            <label class="col-md-3 control-label" for="dosis">Dosis</label>
            <div class="col-md-4">
              {{Form::text("dosis",
              $suministro->Dosis,
              ["placeholder" => "Aqui Nombre",
              "id" => "dosis",
              "class" => "form-control input-md"]
              )
            }}
          </div>
        </div>

        <!-- Campo Via -->
        <div class="control-group">
          <label class="col-md-3 control-label" for="via">Via</label>
          <div class="col-md-4">
            {{Form::text("via",
            $suministro->Via,
            ["placeholder" => "Aqui Nombre",
            "id" => "via",
            "class" => "form-control input-md"]
            )
          }}
        </div>
      </div>

      <!-- Campo Fecha Inicial -->
      <div class="control-group">
        <label class="col-md-3 control-label" for="fecha_inicial">Fecha Inicial</label>
        <div class="col-md-4">
          {{Form::text("fecha_inicial",
          $suministro->FechaInicial,
          ["placeholder" => "Aqui Nombre",
          "id" => "fecha_inicial",
          "class" => "form-control input-md"]
          )
        }}
      </div>
    </div>

    <!-- Campo Servicio -->
    <div class="control-group">
      <label class="col-md-3 control-label" for="servicio">Servicio</label>
      <div class="col-md-4">
        {{Form::text("servicio",
        $suministro->Servicio,
        ["placeholder" => "Aqui Nombre",
        "id" => "servicio",
        "class" => "form-control input-md"]
        )
      }}
    </div>
  </div>

  <!-- Button -->
  <div class="form-actions">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4 ">
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
