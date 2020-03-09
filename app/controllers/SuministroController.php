<?php

class SuministroController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex(){

      $pagi = 'Suministro';

      if (Session::has('usuario')) {

        $suministro = Suministro::paginate(5);
        $medicamento = Medicamento::paginate(5);
        $Categoria = Categoria::paginate(5);
        return View::make('suministro.index',
                          ['suministros'=>$suministro,
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

    public function  getInsert(){

      $pagi = '<a href="#">Suministro</a> <i class="icon-angle-right"></i> Ingresar';

      if (Session::has('usuario')) {

        $c = Categoria::all();

        return  View::make('suministro.insert',
                           ["categorias" => $c,
                           'pag'=>$pagi,
                            "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }


    }

    public function postInsert(){

      //Establecer las reglas de validacion para los campos deseados:
          $reglas=["cantidad" => "required",
                  "frecuencia" => "required|min:3",
                  "duracion" => "required|min:3",
                  "observacion" => "required|min:3",
                  "dosis" => "required|min:3",
                  "servicio" => "required|min:3",
                  ];

          //Establecer los mensajes
          $mensajes = ["required" => "Campo obligatorio",
                      "alpha" => "Caracteres alfabéticos.",
                      "min" => "Minimo :min caracteres"];

          //Crear un objeto validador
          $validador = Validator::make( $_POST, $reglas, $mensajes );

          //Validar los datos:
          if ($validador->fails()){
              //Validacion fallo
              return Redirect::to('suministro/insert')->withErrors($validador);
          }else{
              //Validacion correcta
              //Creamos al categoria:

            $suministro = new Suministro();

            $suministro->Cantidad = $_POST["cantidad"];
            $suministro->Frecuencia = $_POST["frecuencia"];
            $suministro->Duracion = $_POST["duracion"];
            $suministro->Observacion = $_POST["observacion"];
            $suministro->Dosis = $_POST["dosis"];
            $suministro->Via = $_POST["via"];
            $suministro->FechaInicial = $_POST["fecha_inicial"];
            $suministro->Servicio = $_POST["servicio"];
            $suministro->Medicamento_idMedicamento =  $_POST["medicamento"];
            $suministro->Medicamento_CategoriaMedicamento_idCategoriaMedicamento =  $_POST["idCategoriaMedicamento"];

            $suministro->save();
            echo "Registro Exitoso";

            return Redirect::to('suministro')->with('insert','Suministro Ingresado');
          }
      }

    public function getUpdate($id){

      $pagi = '<a href="#">Suministro</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {

        $suministro = Suministro::find($id);

        return  View::make('suministro.update',
                    ["suministro" => $suministro,
                    'pag'=>$pagi,
                    "usuario" => Session::get('usuario')]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }
    }

    public function postUpdate($id) {
      //Establecer las reglas de validacion para los campos deseados:
          $reglas=["cantidad" => "required",
                  "frecuencia" => "required|min:3",
                  "duracion" => "required|min:3",
                  "observacion" => "required|min:3",
                  "dosis" => "required|min:3",
                  "servicio" => "required|min:3",
                  ];

          //Establecer los mensajes
          $mensajes = ["required" => "Campo obligatorio",
                      "alpha" => "Caracteres alfabéticos.",
                      "min" => "Minimo :min caracteres"];

          //Crear un objeto validador
          $validador = Validator::make( $_POST, $reglas, $mensajes );

          //Validar los datos:
          if ($validador->fails()){
              //Validacion fallo
              return Redirect::to('suministro/insert')->withErrors($validador);
          }else{
              //Validacion correcta
              //Creamos al categoria:
            $suministro = Suministro::find($id);

            $suministro->Cantidad = $_POST["cantidad"];
            $suministro->Frecuencia = $_POST["frecuencia"];
            $suministro->Duracion = $_POST["frecuencia"];
            $suministro->Observacion = $_POST["observacion"];
            $suministro->Dosis = $_POST["dosis"];
            $suministro->Via = $_POST["via"];
            $suministro->FechaInicial = $_POST["fecha_inicial"];
            $suministro->Servicio = $_POST["servicio"];

            $suministro->save();

            return Redirect::to('suministro');

          }
        }

        public function getMedicamento($idmedicamento) {

          return suministro::find($idmedicamento)->medicamento()->getresults()->toJson();
        }

}
?>
