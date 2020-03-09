<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Compras</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
          <fieldset>
            <section class="col col-md-10">
              <!-- Campo Cantidad -->
              <div class="control-group">
                <label class="col-md-6 control-label" for="factura">Factura</label>
                <div class="col-md-4">
                  <input id="factura" name="factura" type="text"
                  placeholder="" class="form-control input-md" required="">
                </div>
              </div>

              <!-- Campo Frecuencia -->
              <div class="control-group">
                <label class="col-md-6 control-label" for="fecha">Fecha</label>
                <div class="col-md-4">
                  <input id="fecha" name="fecha" type="date"
                  placeholder="dd/mm/aa" class="form-control input-md" required="">
                </div>
              </div>

              <!-- Campo Duracion -->
              <div class="control-group">
                <label class="col-md-6 control-label" for="valortotal">Valor Compra</label>
                <div class="col-md-4">
                  <input id="valortotal" name="valortotal" type="text"
                  placeholder="" class="form-control input-md" required="">
                </div>
              </div>

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
