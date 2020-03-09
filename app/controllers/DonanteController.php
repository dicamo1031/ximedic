<?php

class DonanteController extends BaseController {
  public function getIndex(){
    $pagi = 'Donantes';
    if (Session::has('usuario')) {

      $donante =  Donante::paginate(5);
      return View::make('Donante.index',
                         ["donantes"=> $donante,
                         'pag'=>$pagi,
                          "usuario" => Session::get('usuario')
                         ]);

      } else {
      //Retorno a login
      return Redirect::to('login');
     }
  }
    public function getInsert (){
      $pagi = '<a href="#">Donantes</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {


        return  View::make('Donante.insert',
                          ['pag'=>$pagi,
                          "usuario" => Session::get('usuario')
                          ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function postInsert(){

      //Establecer las reglas de validacion para los campos deseados:
          $reglas=["nombre" => "required|min:4",
                    "telefono" => "required|min:6|numeric",
                    "iddoc" => "required|min:6|numeric"];

          //Establecer los mensajes
          $mensajes = ["required" => "Campo obligatorio",
                      "alpha" => "Caracteres alfabéticos.",
                      "min" => "Minimo :min caracteres",
                      "numeric" => "Valor numérico."];

          //Crear un objeto validador
          $validador = Validator::make( $_POST, $reglas, $mensajes );

          //Validar los datos:
          if ($validador->fails()){
              //Validacion fallo
              return Redirect::to('Donante/insert')->withErrors($validador);
          }else{
              //Validacion correcta
              //Creamos al categoria:
        //var_dump(Input::all());
        //creamos el actor
        $donante = new Donante();
        //establecemos atributos:
        $donante->Nombre = $_POST['nombre'];
        $donante->Telefono = $_POST['telefono'];
        $donante->TipoDocumento = $_POST['doc'];
        $donante->idDocumento = $_POST['iddoc'];
        //registramos
        $donante->save();
        //echo 'Registro Exitoso...';
       //redirigir a una ruta especifica
        return Redirect::to('Donante');
    }
  }

      public function getUpdate ($id) {
        $pagi = '<a href="#">Donantes</a> <i class="icon-angle-right"></i> Actualizar';


        if (Session::has('usuario')) {

          $donante = Donante::find($id);

          return View::make('Donante.update',
                      ["donante" => $donante,
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
            $donante = Donante::find($id);
            //actualizar atributos del actor encontrado
            $donante->Nombre=$_POST["nombre"];
            $donante->Telefono=$_POST["telefono"];
            $donante->TipoDocumento = $_POST['doc'];
            $donante->idDocumento = $_POST['iddoc'];
            //registramos
            $donante->save();
            //redirigiendo a lista de actores
            return Redirect::to('Donante');
      }
}
