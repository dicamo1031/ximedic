@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
      <center><h2><font size="20" face="JasmineUPC" > Actualizar Donanción</font> </h2></center>
    </div>
    <div class="box-content">
      {{Form::open(["class"=>"form-horizontal"]) }}
      <fieldset>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="fecha">Fecha: </label>
          <div class="col-md-4">

            {{ Form::text("fecha",
            $donacion->fecha,
            ["placeholder" => "dd/mm/aa",
            "id" => "fecha",
            "class" => "form-control input-md"]
            )
          }}
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-5 control-label" for="descripcion">Descripcion:</label>
        <div class="col-md-4">

          {{ Form::text("descripcion",
          $donacion->descripcion,
          ["placeholder" => "Descripcion",
          "id" => "descripcion",
          "class" => "form-control input-md"]
          )
        }}

      </div>
    </div>




    <!-- Button -->
    <div class="form-group">
      <label class="col-md-6 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </font>
</fieldset>

    {{ Form::close()}}
  </div>
</div>

@endsection
