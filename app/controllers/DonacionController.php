<?php

class DonacionController extends BaseController {

  public function getIndex(){
    $pagi = 'Donaciones';
    if (Session::has('usuario')) {


   $donacion = DB::select("call donacionesd");
   $medicamento = Medicamento::all();
   $Categoria = Categoria::all();

   return View::make('donacion.index',
                     ["donaciones"=> $donacion,
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

    public function getInsert() {
      $pagi = '<a href="#">Donaciones</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        $Categoria = Categoria::all();

        return View::make('donacion.insert',
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
      $detalledonacion =  new DetalleDonacion();
      $donacion = new Donacion();
      $detalledonacion->cantidad = $_POST["cantidad"];
      //establecer atributos

      $donacion->Fecha = $_POST["Fecha"];
      $donacion->Descripcion = $_POST["Descripcion"];

      //Registramos
      $detalledonacion->save();
      $donacion->save();
      echo "Registro exitoso";
      //redirigir a una ruta
      return Redirect::to('menu');
    }


    public function getUpdate ($id) {
      $pagi = '<a href="#">Donaciones</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {


      $donacion = Donacion::find($id);
      return View::make('donacion.update',
                      ["donacion" => $donacion,
                      'pag'=>$pagi,
                       "usuario" => Session::get('usuario')
                       ]);

                     } else {
                     //Retorno a login
                     return Redirect::to('login');
                    }
    }

    public function  postUpdate($id){
            //encontrar el actor con id  de parametro
            $donacion = Donante::find($id);
            //actualizar atributos del actor encontrado
            $donacion->Fecha=$_POST["fecha"];
            $donacion->Descripcion=$_POST["descripcion"];
            $detalledonacion->cantidad=$_POST["cantidad"];
             //registramos
            $detalledonacion->save();
            $donacion->save();
            //redirigiendo a lista de actores
            return Redirect::to('donacion');
        }
}
