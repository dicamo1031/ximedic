<?php

class CategoriaController extends BaseController {

  protected $layout = 'includes.pages.Menu';

  public function getIndex() {
    $pagi = 'Categorias';
    if (Session::has('usuario')) {


      $categoria = Categoria::paginate(15);

      return View::make('categoria.index',
                      ["categorias"=> $categoria,
                      'pag'=>$pagi,
                      "usuario" => Session::get('usuario')
                      ]);

                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }

  }

  public function getInsert(){

    $pagi = '<a href="#">Categorias</a> <i class="icon-angle-right"></i> Ingresar';

    if (Session::has('usuario')) {

      return View::make('categoria.insert',
                         ['pag'=>$pagi,
                         "usuario" => Session::get('usuario')
                         ]);

      } else {
      //Retorno a login
      return Redirect::to('login');
     }
  }

  public function postInsert () {

    //Establecer las reglas de validacion para los campos deseados:
        $reglas=["Nombre" => "required|alpha|min:4"];

        //Establecer los mensajes
        $mensajes = ["required" => "Campo obligatorio",
                    "alpha" => "Caracteres alfabéticos.",
                    "min" => "Minimo :min caracteres"];

        //Crear un objeto validador
        $validador = Validator::make( $_POST, $reglas, $mensajes );

        //Validar los datos:
        if ($validador->fails()){
            //Validacion fallo
            return Redirect::to('categoria/insert')->withErrors($validador);
        }else{
            //Validacion correcta
            //Creamos al categoria:

    $categoria = new Categoria();

    $categoria->Nombre = $_POST["Nombre"];

    $categoria->save();
    return Redirect::to('categoria');
    }
  }


  public function getUpdate($id){

    $pagi = '<a href="#">Categorias</a> <i class="icon-angle-right"></i> Actualizar';

    if (Session::has('usuario')) {

    $categoria = Categoria::find($id);
    $usu = Session::get('usuario');

    return  View::make('categoria.update',
                    ["categoria" => $categoria,
                    'pag'=>$pagi,
                    "usuario" => $usu]);
                  } else {
                  //Retorno a login
                  return Redirect::to('login');
                 }


  }

  public function postUpdate($id) {
    //Establecer las reglas de validacion para los campos deseados:
        $reglas=["Nombre" => "required|alpha|min:4"];

        //Establecer los mensajes
        $mensajes = ["required" => "Campo obligatorio",
                    "alpha" => "Caracteres alfabéticos.",
                    "min" => "Minimo :min caracteres"];

        //Crear un objeto validador
        $validador = Validator::make( $_POST, $reglas, $mensajes );

        //Validar los datos:
        if ($validador->fails()){
            //Validacion fallo
            return Redirect::to('categoria/insert')->withErrors($validador);
        }else{
            //Validacion correcta
            //Creamos al categoria:
    $categoria = Categoria::find($id);

    $categoria->Nombre = $_POST["Nombre"];

    $categoria->save();
    return Redirect::to('categorias');
    }
  }

  public function getDestroy($id) {
    $categoria = Categoria::find($id);
    $categoria ->delete();

    return Redirect::to('categorias');

    }
}
