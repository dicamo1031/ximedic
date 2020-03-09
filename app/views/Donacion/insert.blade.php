<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
        <center><h2><font size="20" face="JasmineUPC" > Registrar Donanción</font> </h2></center>
    </div>
    <div class="box-content">
      {{Form::open(["class"=>"form-horizontal"]) }}
      <font face=" arial" size ="4">
        <fieldset>
                <center><h2>Registrar Donante </h2></center>
            </fieldset><br>
                <br>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-5 control-label" for="fecha"> Fecha Donacion: </label>
                <div class="col-md-4">

                 <input id="fecha" name="fecha" type="date" placeholder="dd/mm/aa" class="form-control input-md" required="">
            <!--Errores de validacion:-->
            <strong class="alert-danger col-md-12">{{ $errors->first("fecha") }}</strong>


                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-5 control-label" for="descripcion">Descripcion:</label>
                <div class="col-md-4">

                    {{ Form::text("descripcion",
                                  null,
                                  ["placeholder" => "Descripcion",
                                   "id" => "descripcion",
                                   "class" => "form-control input-md"]
                                 )
                    }}

                </div>
            </div>

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-5 control-label" for="cantidad">Cantidad:</label>
                <div class="col-md-4">

                    {{ Form::text("cantidad",
                                  null,
                                  ["placeholder" => "Cantidad",
                                   "id" => "cantidad",
                                   "class" => "form-control input-md"]
                                 )
                    }}

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
                <label class="col-md-5 control-label" for="singlebutton"></label>
                <div class="col-md-5">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Guardar</button>
                    <button type="reset" class="btn-lg btn-warning" name="clear" value="Borrar">Borrar</button>
                </div>
            </div>
            </font>

      {{ Form::close()}}
    </div>
  </div>
</div>
@endsection
