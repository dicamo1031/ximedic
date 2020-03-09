<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Usuarios</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
          <fieldset>
            <section class="col col-md-10">
              <!-- Campo Cantidad -->
              <div class="control-group">
                <label class="col-md-6 control-label" for="Nombre">Nombre</label>
                <div class="col-md-4">
                  <input id="Nombre" name="Nombre" type="text" placeholder="" class="form-control input-md" required="" >
                  <strong class="alert-danger col-md-12 ">{{ $errors->first("Nombre") }}</strong>
                </div>

              </div>

              <!-- Campo Frecuencia -->
              <div class="control-group">
                <label class="col-md-6 control-label" for="Usuario">Usuario</label>
                <div class="col-md-4">
                  <input id="Usuario" name="Usuario" type="text"
                  placeholder="" class="form-control input-md" required="">
                  <strong class="alert-danger col-md-12 ">{{ $errors->first("Usuario") }}</strong>
                </div>
              </div>

              <!-- Campo Duracion -->
              <div class="control-group">
                <label class="col-md-6 control-label" for="Contraseña">Contraseña</label>
                <div class="col-md-4">
                  <input id="Contraseña" name="Contraseña" type="password"
                  placeholder="" class="form-control input-md" required="">
                  <strong class="alert-danger col-md-12 ">{{ $errors->first("Contraseña") }}</strong>
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

          </fieldset>
          {{ Form::close()}}
      </div>
  </div>
</div>
@endsection
