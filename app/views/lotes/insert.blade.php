<!--heredar la plantilla-->
@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid" id="page-wrapper" style="min-height: 639px;">
  <div class="box span12">

      <div class="box-header">
          <center><h2><font size="20" face="JasmineUPC" > Registro de Lotes</font> </h2></center>
      </div>
      <div class="box-content">
        {{Form::open(["class"=>"form-horizontal"]) }}
        <font face=" arial" size ="4">
              <fieldset>
                <section class="col col-md-12">
                    <!-- Campo Cantidad -->
                    <div class="control-group">
                        <label class="col-md-7 control-label" for="fechavencimiento">Fecha de Vencimiento</label>
                        <div class="col-md-4">
                            <input id="fechavencimiento" name="fechavencimiento" type="date"
                                   placeholder="dd/mm/aa" class="form-control input-md" required="">
                        </div>
                    </div>

                    <!-- Campo Frecuencia -->
                    <div class="form-group">
                        <label class="col-md-7 control-label" for="fechaingreso">Fecha de Ingreso</label>
                        <div class="col-md-4">
                            <input id="fechaingreso" name="fechaingreso" type="date"
                                   placeholder="dd/mm/aa" class="form-control input-md" required="">
                        </div>
                    </div>

                         <!-- Campo Dosis -->
                    <div class="form-group">
                        <label class="col-md-7 control-label" for="documento">Documento</label>
                        <div class="col-md-4">
                            <input id="documento" name="documento" type="text"
                                   placeholder="" class="form-control input-md" required="">
                        </div>
                    </div>

                    <!-- Campo Via -->
                    <div class="form-group">
                        <label class="col-md-7 control-label" for="cantidad">Cantidad</label>
                        <div class="col-md-4">
                            <input id="cantidad" name="cantidad" type="text"
                                   placeholder="" class="form-control input-md" required="">
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
