@extends('includes.pages.Menu')
<!--DEfinir la seccion de la plantilla que va en yield-->
@section('vista')
<div class="row-fluid"  id="page-wrapper" style="min-height: 939px;">
  <div class="box span12">
    <div class="box-header">
      <center><h2><font size="20" face="JasmineUPC" > Editar Compra</font> </h2></center>
    </div>
    <div class="box-content">
      {{Form::open(["class"=>"form-horizontal"]) }}
      <font face=" arial" size ="4">

        <section class="col col-md-10">

          <!-- Campo Cantidad -->
          <div class="control-group">
            <label class="col-md-6 control-label" for="factura">Factura</label>
            <div class="col-md-4">
              {{Form::text("factura",
              $compra->NFactura,
              ["placeholder" => "Aqui Nombre",
              "id" => "factura",
              "class" => "form-control input-md"]
              )
            }}
          </div>
        </div>
        <!-- Campo Frecuencia -->
        <div class="control-group">
          <label class="col-md-6 control-label" for="fecha">Fecha</label>
          <div class="col-md-4">
            {{Form::text("fecha",
            $compra->Fecha,
            ["placeholder" => "Aqui Nombre",
            "id" => "fecha",
            "class" => "form-control input-md"]
            )
          }}
        </div>
      </div>
      <!-- Campo Duracion -->
      <div class="control-group">
        <label class="col-md-6 control-label" for="valortotal">Valor Compra</label>
        <div class="col-md-4">
          {{Form::text("valortotal",
          $compra->ValorTotal,
          ["placeholder" => "Aqui Nombre",
          "id" => "valortotal",
          "class" => "form-control input-md"]
          )
        }}
      </div>
    </div>

    <!-- Button -->
    <div class="form-action">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4 ">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg">Guardar</button>
        <button type="reset" class="btn-lg btn-warning" name="clear" value="Borrar">Borrar</button>

      </div>
    </div>


  </section>
  {{ Form::close()}}

</div>
  </div>
</div>
@endsection
<!DOCTYPE html>
