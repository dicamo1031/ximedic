<?php

class CompraController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex() {

    /**  $conn = DB::connection("mysql");

      if (isset($_GET["buscar"])) {

          $buscar = htmlspecialchars(Input::get("buscar"));
          $compra = $conn
                  ->table("compra")
                  ->where("Fecha","LIKE",'%'.$buscar.'%')
                  ->orwhere("NFactura","LIKE",'%'.$buscar.'%')
                  ->orwhere("ValorTotal","LIKE",'%'.$buscar.'%')
                  ->orwhere("Proveedor_idProveedor","LIKE",'%'.$buscar.'%')

                  ->paginate(5);

      } else {
          $compra = $conn->table("compra")->paginate(5);
      }**/

      $pagi = 'Compras';
      if (Session::has('usuario')) {

        $compra = DB::select("call detCompra");
        $medicamento = Medicamento::all();
        $Categoria = Categoria::all();

        return View::make('compra.index',
                          ['compras' => $compra,
                          'medicamento'=>$medicamento,
                          'Categoria'=>$Categoria,
                          'pag'=>$pagi,
                          "usuario" => Session::get('usuario')
                          ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
     }

      /** $conn = DB::connection("mysql");
       if (isset($_POST['buscar'])) {
         $buscar = htmlspecialchars($_POST[""]);
         $busqueda = $conn
                 ->table("compra")
                 ->Where("Fecha","LIKE",'%'.$buscar.'%')
                 ->OrWhere("NFactura","LIKE",'%'.$buscar.'%')
                 ->OrWhere("ValorTotal","LIKE",'%'.$buscar.'%')
                 ->OrWhere("Proveedor_idProveedor","LIKE",'%'.$buscar.'%')
       } else {
         $busqueda = $conn->table('compra')->paginate(5);
       }
       return View::make('compra.index', ["busqueda" => $busqueda]);
     }

   }**/

    public function getInsert() {
      $pagi = '<a href="#">Compras</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        $Categoria = Categoria::all();

        return View::make('compra.insert',
                      [
                        'categorias'=>$Categoria,
                        'pag'=>$pagi,
                        "usuario" => Session::get('usuario')
                    ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function postInsert() {
        $compra = new Compra();

        $compra->NFactura = $_POST["factura"];
        $compra->Fecha = $_POST["fecha"];
        $compra->ValorTotal = $_POST["valortotal"];
        $compra->Proveedor_idProveedor = 1;

        $compra->save();
        echo "Registro exitoso";

        return Redirect::to('compra')->with('insert','Compra Registrada');
    }


    public function getUpdate($id) {

      $pagi = '<a href="#">Compras</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {

        $compra = Compra::find($id);
        return View::make('compra.update',
                    ["compra" => $compra,
                    'pag'=>$pagi,
                    "usuario" => Session::get('usuario')
                    ]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }


    }

    public function postUpdate($id) {

        $compra = Compra::find($id);
        $compra->NFactura = $_POST["factura"];
        $compra->Fecha = $_POST["fecha"];
        $compra->ValorTotal = $_POST["valortotal"];

        $compra->save();

        return Redirect::to('compra');
    }

}
