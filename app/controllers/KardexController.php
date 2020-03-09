<?php

class KardexController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex() {
      if (Session::has('usuario')) {

        $pagi = 'Kardex';

        $kardex = Kardex::paginate(10);
        return View::make('kardex.index',
                        ["kardexs" => $kardex,
                        'pag'=>$pagi,
                        "usuario" => Session::get('usuario')
                        ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function getInsert() {

      $pagi = '<a href="#">Kardex</a> <i class="icon-angle-right"></i> Ingresar';


      if (Session::has('usuario')) {

        return View::make('kardex.insert',
                           ['pag'=>$pagi,
                           "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function postInsert() {

        $kardex = new Kardex();

        $kardex->tipoMovimiento = $_POST['tipoM'];
        $kardex->FechaKardex = $_POST['fecha'];
        $kardex->idMovimiento = $_POST['idmovimiento'];
        $kardex->cantidad = $_POST['cantidad'];
        $kardex->Medicamento_idMedicamento = '1';
        $kardex->Medicamento_CategoriaMedicamento_idCategoriaMedicamento = '1';

        $kardex->save();

        return Redirect::to('kardex');
    }

    public function getUpdate ($id) {

      $pagi = '<a href="#">Kardex</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {

        $kardex= Kardex::find($id);
        return View::make('kardex.update',
                    ["kardex" => $kardex,
                    'pag'=>$pagi,
                    "usuario" => Session::get('usuario')]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }
            //mostrar vista actualizar..

        }


    public function postUpdate($id) {

        $kardex = Kardex::find($id);

        $kardex->tipoMovimiento = $_POST['tipoM'];
        $kardex->FechaKardex = $_POST['fecha'];
        $kardex->idMovimiento = $_POST['idmovimiento'];
        $kardex->cantidad = $_POST['cantidad'];

        $kardex->save();

        return Redirect::to('kardex');
    }

}
