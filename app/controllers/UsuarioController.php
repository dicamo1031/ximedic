<?php

class UsuarioController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex() {
      $usuario = Usuario::paginate(10);
      return View::make('login.insert_user',
                      ["usuario" => $usuario]);
                    }

    public function getInsert() {
      $pagi = '<a href="#">Medicamentos</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        $c = Categoria::all();

        foreach ($c as $cat ) {
          $categorias[$cat['id']] =  $cat['Nombre'];
        }

        $medicamentos = Medicamento::All();
        $medicamentos2 = DB::select('call allInfoMed');
        return  View::make('login.insert_user',
                           ["medicamentos" => $medicamentos,
                           "medicamento" => $medicamentos2,
                           "categorias" => $c,
                           'pag'=>$pagi,
                            "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function postInsert() {
      //Establecer las reglas de validacion para los campos deseados:
      $reglas = ["Nombre" => "required|min:4",
                "Usuario" => "required|alpha|min:4",
                "Contraseña" => "required|min:8"];

      //Establecer los mensajes
      $mensajes = ["required" => "Campo obligatorio",
                  "alpha" => "Caracteres alfabéticos.",
                  "min" => "Minimo :min caracteres",
                  "numeric" => "Valor numérico."
                  ];

      //Crear un objeto validador
      $validador = Validator::make($_POST, $reglas, $mensajes);

      //Validar los datos:
      if ($validador->fails()) {
          //Validacion fallo
          return Redirect::to('Usuario/insert')->withErrors($validador);
      } else {
          $usuario = new Usuario();

          $usuario->nombre = $_POST["Nombre"];
          $usuario->username = $_POST["Usuario"];
          $cont = $_POST["Contraseña"];
          $usuario->password = Hash::make($cont);

          $usuario->save();

          return Redirect::to('Usuario/insert')->with('insert_user','Usuario Registrado');
      }
    }

    public function  getUpdate($id){

      $pagi = '<a href="#">Usuario</a> <i class="icon-angle-right"></i> Actualizar datos';

      $user = DB::select("SELECT * FROM user where username = '$id'");
      return View::make("login.update",
                      ['pag'=>$pagi,
                      "user"=>$user,
                      "usuario" => Session::get('usuario')
                      ]);
    }

    public function postUpdate($id) {

      //Establecer las reglas de validacion para los campos deseados:
      $reglas = ["Nombre" => "required|alpha|min:4",
                "Usuario" => "required|alpha|min:4",
                "Contraseña" => "required|min:8"];

      //Establecer los mensajes
      $mensajes = ["required" => "Campo obligatorio",
          "alpha" => "Caracteres alfabéticos.",
          "min" => "Minimo :min caracteres",
          "numeric" => "Valor numérico."];

      //Crear un objeto validador
      $validador = Validator::make($_POST, $reglas, $mensajes);

      //Validar los datos:
      if ($validador->fails()) {
          //Validacion fallo
          return Redirect::to('Usuario/insert')->withErrors($validador);
      } else {
          $usuario = new Usuario();

          $usuario->nombre = $_POST["Nombre"];
          $usuario->username = $_POST["Usuario"];
          $cont = $_POST["Contraseña"];
          $usuario->password = Hash::make($cont);

          $usuario->save();

          return Redirect::to('Usuario/insert')->with('insert_user','Usuario Registrado');
      }
    }

}

?>
