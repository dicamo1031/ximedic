<div class="row">
    <section class="col-md-6 col-sm-6 col">
        {{Form::open(["class"=>"form-horizontal"])}}
        <fieldset>
          <h2> Lista de medicamentos </h2>

          <center>

            <table class="table table-condensed table-striped centrar">
                <thead>
                    <tr>

                        <th>Nombre del Medicamento</th>
                        <th>Via</th>
                        <th>Laboratorio</th>
                        <th>Cantidad minima</th>
                        <th>Existencia</th>
                        <th>Categoria</th>
                        <th></th>
                        <!--<th></th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicamento as $medicamentos)
                    <tr>

                        <td>{{ $medicamentos->Nombre}}</td>
                        <td>{{ $medicamentos->Via}}</td>
                        <td>{{ $medicamentos->Laboratorio}}</td>
                        <td>{{ $medicamentos->cantidadMinima}}</td>
                        <td>{{ $medicamentos->Existencias}}</td>
                        <td>{{ $medicamentos->CategoriaMedicamento_idCategoriaMedicamento}}</td>
                        <td><button type="button" class="btn btn-default btn-sm">
                        {{ HTML::link("medicamentos/update/$medicamentos->idMedicamento", "Actualizar") }}
                        </button></td>
                        <!--<td><button type="button" class="btn btn-danger">Eliminar</button></td>-->

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--paginando-->
            <center>{{ $medicamento->links ()}}</center>
            <center><button type="button" class="btn btn-default btn-lg">{{ HTML::link ('medicamentos/registro',"Nuevo Medicamento" )}}</button></center>
            </center>
        </fieldset>
        {{Form::close()}}
    </section>
</div>
