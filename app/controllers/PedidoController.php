<?php

class PedidoController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex(){
      $pagi = 'Pedidos';
      if (Session::has('usuario')) {

        $pedido = Pedido::all();
        return View::make('pedido.index',
                         ["pedidos" => $pedido,
                         'pag'=>$pagi,
                         "usuario" => Session::get('usuario')
                        ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }

    }

    public function getInsert(){

      $pagi = '<a href="#">Pedidos</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        $c = Categoria::all();
        return   View::make('pedido.insert',
                           ["categorias" => $c,
                           'pag'=>$pagi,
                            "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }

      //return View::make('pedido.insert');
    }

    public function postInsert(){

        $reglas=["numeroPedido" => "required"];

        $mensajes = ["required" => "Campo :atribute Obligatorio"];

        $validador = Validator::make($_POST, $reglas, $mensajes);

        if ($validador->fails()){
            return Redirect::to('pedido/insert')->withErrors($validador);
        }else{
        $pedido = new Pedido();
        $pedido->Fecha = $_POST["fecha"];
        $a = $_POST["numeroPedido"];
        $pedido->NumeroPedido = $_POST["numeroPedido"];
        $pedido->save();
        $ped = Pedido::select('idPedido')
                      ->where('NumeroPedido', 'like', $_POST["numeroPedido"])
                      ->get();
        echo($ped);
        foreach ($ped as $ca) {
               $a = $ca['idPedido'];
            }
        echo ($a);
        DB::insert('insert into medicamento_has_pedido(Medicamento_idMedicamento,Pedido_idPedido) values(?,?)', array( $_POST["medicamento"],
                                                                               $a
                                                                              ));

        echo "registro Exitoso";
        return Redirect::to('pedido')->with('insert','Pedido Registrado');
        }
    }



    public function getUpdate($id){

      $pagi = '<a href="#">Pedidos</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {

        $pedido = Pedido::find($id);

        return  View::make('pedido.update',
                    ["pedido"=>$pedido,
                    'pag'=>$pagi,
                    "usuario" => Session::get('usuario')]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }
    }

    public function  postUpdate($id) {
        $pedido = Pedido::find($id);

        $pedido->Fecha = $_POST["fecha"];
        $pedido->NumeroPedido = $_POST["numeroPedido"];

        $pedido->save();
        return Redirect::to('pedido');
    }

    public function getMedicamento($idmedicamento) {

      return suministro::find($idmedicamento)->medicamento()->getresults()->toJson();
    }
}
