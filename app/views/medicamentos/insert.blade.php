<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
  <div class="box span12">

      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Medicamentos</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
        <!-- Form Name -->
        <fieldset>
          <section class="col col-md-12">
                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="nombre_medicamento">Nombre Del Medicamento</label>
                    <div class="controls">
                        <input id="Nombre" name="Nombre" type="text" placeholder="" class="input-xlarge focused" required="">
                        <!--Errores de validacion:-->
                        <strong class="alert-danger col-md-12 ">{{ $errors->first("Nombre") }}</strong>
                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class=" control-label" for="Via">Via</label>
                    <div class="controls">
                        <select  id="Via" name="Via" required="">
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

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="numero_existencias">Laboratorio</label>
                    <div class="controls">
                        <input id="Laboratorio" name="Laboratorio" type="text" placeholder="" class="input-xlarge focused" required="">
                        <!--Errores de validacion:-->
                        <strong class="alert-danger col-md-12 ">{{ $errors->first("Laboratorio") }}</strong>
                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="numero_existencias">Cantidad Dosis</label>
                    <div class="controls">
                        <input id="cantidadDosis" name="cantidadDosis" type="text" placeholder="" class="input-xlarge focused" required="">
                        <!--Errores de validacion:-->
                        <strong class="alert-danger col-md-12 ">{{ $errors->first("cantidadDosis") }}</strong>
                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class=" control-label" for="CategoriaMedicamento_idCategoriaMedicamento">Categoria </label>
                    <div class="controls">
                        <select class="form-control" id="CategoriaMedicamento_idCategoriaMedicamento" name="CategoriaMedicamento_idCategoriaMedicamento" required="">
                            @foreach ($categorias as $categoria)
                            <option data-value="{{ $categoria->idCategoriaMedicamento  }}"
                                    value="{{ $categoria->idCategoriaMedicamento  }}" >
                                {{  $categoria->Nombre  }}

                            </option>


                            @endforeach
                        </select>
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
