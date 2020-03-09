<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<!DOCTYPE html>
<html>
  <head>
    {{HTML::script('js/cateMedica.js')}}
  </head>
  <body>
    <div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
      <div class="box span12">

        <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Suministro</font> </h2></center>
        </div>
        <div class="box-content">
          {{Form::open(["class"=>"form-horizontal"]) }}
          <font face=" arial" size ="4">

            <fieldset>
              <section class="col col-md-12">
                <div class="control-group">
                  <label class="col-md-7 control-label" for="idCategoriaMedicamento">Categoria: </label>
                  <div class="col-md-4">
                    <select class="form-control" id="idCategoriaMedicamento" name="idCategoriaMedicamento" required="">
                      @foreach ($categorias as $categoria)
                      <option data-value="{{ $categoria->idCategoriaMedicamento  }}"
                        value="{{ $categoria->idCategoriaMedicamento  }}" >
                        {{  $categoria->Nombre  }}

                      </option>
                      @endforeach
                    </select>

                  </div>
                </div>

                <!-- Campo Medicamento -->
                <div class="form-group">
                  <label class="col-md-7 control-label" for="idCategoriaMedicamento">Medicamento: </label>
                  <div class="col-md-4">
                    <select class="form-control" id="medicamento" name="medicamento">
                    </select>
                  </div>
                </div>

                <!-- Campo Cantidad -->
                <div class="form-group">
                  <label class="col-md-7 control-label" for="cantidad">Cantidad</label>
                  <div class="col-md-4">
                    <input id="cantidad" name="cantidad" type="text"
                    placeholder="" class="form-control input-md" required="">
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("cantidad") }}</strong>
                  </div>
                </div>

                <!-- Campo Frecuencia -->
                <div class="form-group">
                  <label class="col-md-7 control-label" for="frecuencia">Frecuencia</label>
                  <div class="col-md-4">
                    <input id="frecuencia" name="frecuencia" type="text"
                    placeholder="" class="form-control input-md" required="">
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("frecuencia") }}</strong>
                  </div>
                </div>

                <!-- Campo Duracion -->
                <div class="form-group">
                  <label class="col-md-7 control-label" for="duracion">Duracion</label>
                  <div class="col-md-4">
                    <input id="duracion" name="duracion" type="text"
                    placeholder="" class="form-control input-md" required="">
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("duracion") }}</strong>
                  </div>
                </div>

                <!-- Campo Observacion -->
                <div class="form-group">
                  <label class="col-md-7 control-label" for="observacion">Observacion</label>
                  <div class="col-md-4">
                    <input id="observacion" name="observacion" type="text"
                    placeholder="" class="form-control input-md" required="">
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("observacion") }}</strong>
                  </div>
                </div>

              </section>


              <section class="col col-md-6">
                <!-- Campo Dosis -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="dosis">Dosis</label>
                  <div class="col-md-4">
                    <input id="dosis" name="dosis" type="text"
                    placeholder="" class="form-control input-md" required="">
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("dosis") }}</strong>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="Via">Via</label>
                  <div class="col-md-4">
                    <select class="form-control" id="Via" name="Via" required="">
                      <option  data-value="1">Via Oral</option>
                      <option  data-value="2">Via Sublingual</option>
                      <option  data-value="3">Via Topica</option>
                      <option  data-value="4">Via Transdermica</option>
                      <option  data-value="5">Via Oftamica</option>
                      <option  data-value="6">Via Otica</option>
                      <option  data-value="7">Via Intranasal</option>
                      <option  data-value="8">Via Rectal</option>
                      <option  data-value="9">Via Parental</option>
                    </select>
                  </div>
                </div>

                <!-- Campo Fecha Inicial -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="fecha_inicial">Fecha Inicial</label>
                  <div class="col-md-4">
                    <input id="fecha_inicial" name="fecha_inicial" type="date"
                    placeholder="dd/mm/aa" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Campo Servicio -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="servicio">Servicio</label>
                  <div class="col-md-4">
                    <input id="servicio" name="servicio" type="text"
                    placeholder="" class="form-control input-md" required="">
                    <!--Errores de validacion:-->
                    <strong class="alert-danger col-md-12 ">{{ $errors->first("servicio") }}</strong>
                  </div>
                </div>

              </section>
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

  </body>
</html>

@endsection
