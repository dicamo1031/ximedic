@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
      <center><h2><font size="20" face="JasmineUPC" > Editar Usuario</font> </h2></center>
    </div>
    <div class="box-content">
      {{Form::open(["class"=>"form-horizontal"]) }}
      <font face=" arial" size ="4">

        <section class="col col-md-10">
          <!-- Campo Cantidad -->
          <div class="control-group">
            <label class="col-md-6 control-label" for="Nombre">Nombre</label>
            <div class="col-md-4">
              {{Form::text("nombre",
              $user[0]->nombre,
              ["placeholder" => "Aqui Nombre",
              "id" => "nombre",
              "class" => "form-control input-md"]
              )
            }}
            <strong class="alert-danger col-md-12 ">Campo obligatorio</strong>
          </div>
        </div>
        <!-- Campo Frecuencia -->
        <div class="control-group">
          <label class="col-md-6 control-label" for="Usuario">Usuario</label>
          <div class="col-md-4">
            {{Form::text("usuario",
            $user[0]->username,
            ["placeholder" => "",
            "id" => "usuario",
            "class" => "form-control input-md"]
            )
          }}
          <strong class="alert-danger col-md-12 ">Campo obligatorio</strong>
        </div>
      </div>
      <!-- Campo Duracion -->
      <div class="control-group">
        <label class="col-md-6 control-label" for="Contraseña">Contraseña </label>
        <div class="col-md-4">
          {{Form::password("contraseña",
          null,
          ["placeholder" => "",
          "id" => "password",
          "class" => "form-control input-md"]
          )
        }}
        <strong class="alert-danger col-md-12 ">Campo obligatorio</strong>
      </div>
    </div>

    <!-- Button -->
    <div class="form-action">
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
</div>


@endsection
<!DOCTYPE html>
