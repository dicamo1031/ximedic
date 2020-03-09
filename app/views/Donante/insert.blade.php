<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
  <div class="box span12">

      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registrar Donante</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
        <!-- Form Name -->
        <fieldset>
          <!-- Text input-->
          <div class="control-group">
            <label class="col-md-5 control-label" for="nombre">Nombre Donante: </label>
            <div class="col-md-4">

              {{ Form::text("nombre",
              null,
              ["placeholder" => "Escriba Nombre Proveedor",
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
            null,
            ["placeholder" => "Numero Telefono",
            "id" => "telefono",
            "class" => "form-control input-md"]
            )
          }}
          <!--Errores de validacion:-->
          <strong class="alert-danger col-md-12 ">{{ $errors->first("telefono") }}</strong>

        </div>
      </div>

      <!-- Text input-->
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
        <label class="col-md-5 control-label" for="direccion">Numero Documento:</label>
        <div class="col-md-4">

          {{ Form::text("iddoc",
          null,
          ["placeholder" => "Numero documento",
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
        <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Guardar</button>
        <button type="reset" class="btn-lg btn-warning" name="clear" value="Borrar">Borrar</button>
      </div>
    </div>
  </fieldset>

        {{ Form::close()}}
      </div>
  </div>

</div>

@endsection
