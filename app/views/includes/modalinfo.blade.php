<?php
$direccion = $_SERVER['REQUEST_URI'];
$cadena_buscada = 'medicamentos';

$posicion_coincidencia = strpos($direccion, $cadena_buscada);

if ($posicion_coincidencia === false) {

} else {
    ?>
    @foreach($medicamento as $medicamentos)
    <!-- line modal -->
    <div class="modal fade" id="squarespaceModal{{$medicamentos->idMedicamento}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Informacion del Medicamento</h3>
                </div>
                <div class="modal-body">

                    <!-- content goes here -->
                    <form>

                        <div class="form-group">
                            <label for="exampleInputFile">Numero de medicamento</label> {{ $medicamentos->idMedicamento}}

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Lote:</label> {{ $medicamentos->nDocumento}}

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Categoria del Medicamento: </label>{{ $categorias[$medicamentos->CategoriaMedicamento_idCategoriaMedicamento-1]['Nombre']}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nombre Del Medicamento:</label> {{ $medicamentos->Nombre}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Fecha Vencimiento</label> {{ $medicamentos->FechaVencimiento}}

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Cantidad En Miligramos:</label> {{ $medicamentos->cantidadDosis}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Via:</label> {{ $medicamentos->Via}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Cantidad del medicamento:</label> {{ $medicamentos->cantidad}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Laboratorio:</label> {{ $medicamentos->Laboratorio}}
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                        </div>
                        <div class="btn-group btn-delete hidden" role="group">
                            <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <?php

}
?>
