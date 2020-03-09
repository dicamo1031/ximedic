@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
      <center><h2><font size="20" face="JasmineUPC" > Editar Categoria</font> </h2></center>
    </div>
    <div class="box-content">
      {{Form::open(["class"=>"form-horizontal"]) }}
      <section class="col col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="col-md-4 control-label" for="Nombre">Nombre Categoria: </label>
          <div class="col-md-4">

            {{Form::text("Nombre",
            $categoria->Nombre,
            ["placeholder" => "Aqui Nombre",
            "id" => "Nombre",
            "class" => "form-control input-md"]
            )
          }}
          <!--Errores de validacion:-->
          <strong class="alert-danger col-md-12 ">{{ $errors->first("Nombre") }}</strong>

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
    {{ Form::close()}}
  </div>
</div>

@endsection
