<?php

class MedicamentosFaltantesController extends BaseController{
    public function getIndex() {

        $c = Categoria::all();
        foreach ($c as $cat) {
          $categorias[$cat['id']] = $cat['Nombre'];
        }
        $medicamentos = Medicamento::paginate(5);
        //ingresar los actores en una vista
        //y retornando la vista al cliente
        return View::make('medicamentos.medicamentosFaltantes',
                         ["medicamento" => $medicamentos,
                         "categorias" => $categorias]);
    }
}
