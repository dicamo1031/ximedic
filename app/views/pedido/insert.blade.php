<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
  <div class="box span12">

      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Pedido</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">

          <fieldset>
            <section class="col col-md-12">
        <div class="control--group">
            <label class="col-md-4 control-label" for="idCategoriaMedicamento">Categoria: </label>
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
            <label class="col-md-4 control-label" for="idCategoriaMedicamento">Medicamento: </label>
            <div class="col-md-4">
              <select class="form-control" id="medicamento" name="medicamento">
              </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fecha">Fecha del Pedido</label>
            <div class="col-md-4">
                <input id="fecha" name="fecha" type="date" placeholder="dd/mm/aa" class="form-control input-md" required="">
                <!--Errores de validacion:-->
                <strong class="alert-danger col-md-12">{{ $errors->first("fecha") }}</strong>

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="numeroPedido">Numero de Pedido</label>
            <div class="col-md-4">
                <input id="numeroPedido" name="numeroPedido" type="text" placeholder="" class="form-control input-md" required="">

                <!--Errores de validacion:-->
                <strong class="alert-danger col-md-12">{{ $errors->first("numeroPedido") }}</strong>
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
