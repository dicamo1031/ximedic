<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
  <div class="box span12">

      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Proveedor</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
              <fieldset>
                <section class="col col-md-12">
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-5 control-label" for="nombre">Nombre Proveedor: </label>
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
                <div class="form-group">
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

                <div class="form-group">
                    <label class="col-md-5 control-label" for="direccion">Direccion:</label>
                    <div class="col-md-4">

                        {{ Form::text("direccion",
                                      null,
                                      ["placeholder" => "Direccion",
                                       "id" => "direccion",
                                       "class" => "form-control input-md"]
                                     )
                        }}
                        <!--Errores de validacion:-->
                        <strong class="alert-danger col-md-12 ">{{ $errors->first("direccion") }}</strong>

                    </div>
                </div>
                <!-- Button -->
                <div class="form-actions">
                    <label class="control-label" for="singlebutton"></label>
                      <button id="singlebutton" name="singlebutton" class="btn  btn-erase">Guardar</button>
                      <button type="reset" class="btn " name="clear" value="Borrar">Borrar</button>

                </div>
            </section>
          </fieldset>
          {{ Form::close()}}
          </div>
          </div>

          </div>

          @endsection
