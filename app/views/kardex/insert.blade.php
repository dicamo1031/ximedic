<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
  <div class="box span12">

      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Kardex</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
        <!-- Form Name -->
        <fieldset>
          <!-- Select Basic -->
          <div class="control-group">
            <label class="col-md-4 control-label" for="tipoM">Tipo de Movimiento</label>
            <div class="col-md-4">
              <select id="tipoM" name="tipoM" class="form-control input-md">
                <option value="1">Donación</option>
                <option value="2">Compra</option>
              </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="col-md-4 control-label" for="fecha">Fecha del Kardex</label>
            <div class="col-md-4">
              <!--                  <input id="fecha" name="fecha" type="date" placeholder="dd/mm/aa" class="form-control input-md" required="">-->
              {{ Form::input('date',"fecha",null,[ "class" => "form-control input-md"])
            }}
          </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
          <label class="col-md-4 control-label" for="idmovimiento">Id Movimiento</label>
          <div class="col-md-4">

            {{ Form::text("idmovimiento",
            null,
            ["placeholder" => " Id del movimiento",
            "id" => "idmovimiento",
            "class" => "form-control input-md"]
            )
          }}
        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="col-md-4 control-label" for="cantidad">Cantidad Medicamentos</label>
        <div class="col-md-4">

          {{ Form::text("cantidad",
          null,
          ["placeholder" => "cantidad del medicamento",
          "id" => "cantidad",
          "class" => "form-control input-md"]
          )
        }}

      </div>
    </div>
    <!-- Button -->
    <div class="form-action">
      <label class="col-md-5 control-label" for="singlebutton"></label>
      <div class="col-md-5">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Guardar</button>
        <button type="reset" class="btn-lg btn-warning" name="clear" value="Borrar">Borrar</button>
      </div>
    </div>
  </font>
</fieldset>

        {{ Form::close()}}
      </div>
  </div>

</div>
@endsection
