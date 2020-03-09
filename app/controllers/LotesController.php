<?php

class LotesController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex() {

      $pagi = 'Lotes';

      if (Session::has('usuario')) {

        $lotes = Lotes::All();
        return View::make('lotes.index',
                        ["lotes" => $lotes,
                        'pag'=>$pagi,
                        "usuario" => Session::get('usuario')
                        ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function getInsert() {

      $pagi = '<a href="#">Lotes</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        return View::make('lotes.insert',
                           ['pag'=>$pagi,
                           "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function postInsert() {
        $lotes = new Lotes();

        $lotes->FechaVencimiento = $_POST["fechavencimiento"];
        $lotes->FechaIngreso = $_POST["fechaingreso"];
        $lotes->nDocumento = $_POST["documento"];
        $lotes->cantidad = $_POST["cantidad"];
        $lotes->Medicamento_idMedicamento = 1;
        $lotes->Medicamento_CategoriaMedicamento_idCategoriaMedicamento = 1;

        $lotes->save();
        echo "Registro exitoso";

        return Redirect::to('lotes/index')->with('insert','Lote Ingresado');
    }

    public function getUpdate($id) {

      $pagi = '<a href="#">Lotes</a> <i class="icon-angle-right"></i> Actualizar';


      if (Session::has('usuario')) {

        $lotes = Lotes::find($id);

        return  View::make('lotes.update',
                    ["lotes" => $lotes,
                    'pag'=>$pagi,
                    "usuario" => Session::get('usuario')
                    ]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }
    }

    public function postUpdate($id) {
        $lotes = Lotes::find($id);
        $lotes->FechaVencimiento = $_POST["fechavencimiento"];
        $lotes->FechaIngreso = $_POST["fechaingreso"];
        $lotes->nDocumento = $_POST["documento"];
        $lotes->cantidad = $_POST["cantidad"];

        $lotes->save();

        return Redirect::to('lotes/index');
    }

}
