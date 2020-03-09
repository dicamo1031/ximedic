@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
        <div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
          <div class="box span12">
            <div class="box-header">
              <center><h2><font size="20" face="JasmineUPC" > Editar Pedido</font> </h2></center>
            </div>
            <div class="box-content">
              {{Form::open(["class"=>"form-horizontal"]) }}
              <center>
                  <section class="col col-md-6">
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fecha">Fecha del Pedido</label>
            <div class="col-md-4">
                {{Form::text("fecha",
                         $pedido->Fecha,
                         ["placeholder" => "Aqui Nombre",
                         "id" => "fecha",
                         "class" => "form-control input-md"]
                         )
                }}
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="numeroPedido">Numero de Pedido</label>
            <div class="col-md-4">
                {{Form::text("numeroPedido",
                                      $pedido->NumeroPedido,
                                      ["placeholder" => "Pedido #",
                                      "id" => "numeroPedido",
                                      "class" => "form-control input-md"]
                                          )
                }}
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
