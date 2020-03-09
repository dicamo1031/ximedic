@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
        <div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
          <div class="box span12">
            <div class="box-header">
              <center><h2><font size="20" face="JasmineUPC" > Actualizar Proveedor</font> </h2></center>
            </div>
            <div class="box-content">
              {{Form::open(["class"=>"form-horizontal"]) }}
              <center>
                  <section class="col col-md-6">
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-5 control-label" for="nombre">Nombre Proveedor: </label>
                    <div class="col-md-4">

                        {{ Form::text("nombre",
                                      $proveedor->Nombre,
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
                                     $proveedor->Telefono,
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
                                    $proveedor->Direccion,
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
                    <label class="col-md-6 control-label" for="singlebutton"></label>
                    <div class="col-md-6 ">
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
