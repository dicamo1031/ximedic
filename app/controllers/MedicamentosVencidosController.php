<?php

class MedicamentosVencidosController extends BaseController {

    public function getIndex() {

        $c = Categoria::all();
        $medicamentos = Medicamento::paginate(5);
        //ingresar los actores en una vista
        //y retornando la vista al cliente
        return View::make('medicamentos.medicamentosVencidos',
                         ["medicamento" => $medicamentos,
                         "categorias" => $c]);
    }
}
