<?php

class ProveedorController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex(){

      $pagi = 'Proveedor';

       if (Session::has('usuario')) {

         $proveedores =  Proveedor::paginate(5);
         return View::make('proveedor.index',
                          ["proveedores"=> $proveedores,
                          'pag'=>$pagi,
                          "usuario" => Session::get('usuario')
                          ]);

         } else {
         //Retorno a login
         return Redirect::to('login');
        }

     }

    public function getInsert (){

      $pagi = '<a href="#">Proveedor</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        return  View::make('proveedor.insert',
                           ['pag'=>$pagi,
                           "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }
    }

    public function postInsert(){

          $reglas=["nombre" => "required|alpha|min:6",
                    "telefono" => "required|min:7|numeric",
                  "direccion" => "required|min:7"];

          $mensajes = ["required" => "Campo obligatorio",
                      "alpha" => "Caracteres alfabéticos.",
                      "min" => "Minimo :min caracteres",
                      "numeric" => "Valor numérico."];

          $validador = Validator::make( $_POST, $reglas, $mensajes );

          if ($validador->fails()){

              return Redirect::to('proveedor/insert')->withErrors($validador);
          }else{

        $proveedor = new Proveedor();

        $proveedor->Nombre = $_POST['nombre'];
        $proveedor->Telefono = $_POST['telefono'];
        $proveedor->Direccion = $_POST['direccion'];

        $proveedor->save();
        return Redirect::to('proveedor');
      }
    }

    public function getUpdate ($id) {

      $pagi = '<a href="#">Proveedor</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {

        $proveedor= Proveedor::find($id);

        return  View::make('proveedor.update',
                    ["proveedor" => $proveedor,
                    'pag'=>$pagi,
                    "usuario" => Session::get('usuario')]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }
        }

    public function  postUpdate($id){

          //Establecer las reglas de validacion para los campos deseados:
              $reglas=["nombre" => "required|alpha|min:6",
                        "telefono" => "required|numeric|min:7",
                      "direccion" => "required|min:7"];

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
                  return Redirect::to('proveedor/insert')->withErrors($validador);
              }else{
                  //Validacion correcta
                  //Creamos al categoria:
            //encontrar el actor con id  de parametro
            $proveedor = Proveedor::find($id);
            //actualizar atributos del actor encontrado
            $proveedor->Nombre=$_POST["nombre"];
            $proveedor->Telefono=$_POST["telefono"];
            $proveedor->Direccion=$_POST["direccion"];
            //guardar datos
            $proveedor ->save();
            //redirigiendo a lista de actores
            return Redirect::to('proveedor');
        }
      }
  }
