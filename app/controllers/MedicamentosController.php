<?php

class MedicamentosController extends BaseController {

    protected $layout = 'includes.pages.Menu';

    public function getIndex() {
      $pagi = 'Medicamentos';
      if (Session::has('usuario')) {

        $categorias = Categoria::all();
        $c = Categoria::all();
        $medicamentos2 = DB::select('call allInfoMed');
        $medicamentos = Medicamento::all();
        return View::make('medicamentos.index',
                           ["medicamentos" => $medicamentos,
                           "medicamento" => $medicamentos2,
                           "categorias" => $categorias,
                           "categorias" => $c,
                           'pag'=>$pagi,
                            "usuario" => Session::get('usuario')
                           ]);

        } else {
        //Retorno a login
        return Redirect::to('login');
       }

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
        return  View::make('medicamentos.insert',
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
        $reglas = ["Nombre" => "required|alpha|min:4",
            "Laboratorio" => "required|alpha|min:3",
            "cantidadDosis" => "required"];

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
            return Redirect::to('medicamentos/insert')->withErrors($validador);
        } else {
            //Validacion correcta
            //Creamos al categoria:

            $medicamentos = new Medicamento();
            //establecer atributos
            $medicamentos->Nombre = $_POST["Nombre"];
            $medicamentos->Via = $_POST["Via"];
            $medicamentos->Laboratorio = $_POST["Laboratorio"];
            $medicamentos->cantidadDosis = $_POST["cantidadDosis"];
            $medicamentos->CategoriaMedicamento_idCategoriaMedicamento = $_POST["CategoriaMedicamento_idCategoriaMedicamento"];
            //Registramos
            $medicamentos->save();
            echo "Registro exitoso";
            //redirigir a una ruta especifica
            return Redirect::to('lotes/insert')->with('insert', 'Medicamento Ingresado');
        }
    }

    public function getUpdate($id) {
      $pagi = '<a href="#">Medicamentos</a> <i class="icon-angle-right"></i> Actualizar';

      if (Session::has('usuario')) {

        $c = Categoria::all();
        //encontrar el medicamento con id de parametro
        $medicamentos = Medicamento::find($id);
        $medicamentos2 = DB::select('call allInfoMed');
        return  View::make('medicamentos.update',
                           ["medicamentos" => $medicamentos,
                           "medicamento" => $medicamentos2,
                          "categorias" => $c,
                          'pag'=>$pagi,
                          "usuario" => Session::get('usuario')]);
                    } else {
                    //Retorno a login
                    return Redirect::to('login');
                   }

    }

    public function postUpdate($id) {

        //Establecer las reglas de validacion para los campos deseados:
        $reglas = ["Nombre" => "required|alpha|min:4",
            "Laboratorio" => "required|alpha|min:3",
            "cantidadDosis" => "required|min:3"];

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
            return Redirect::to('medicamentos/insert')->withErrors($validador);
        } else {
            //Validacion correcta
            //Creamos al categoria:
            $medicamentos = Medicamento::find($id);
            //actualizar los atributos del actor actualizado
            $medicamentos->Nombre = $_POST["Nombre"];
            $medicamentos->Via = $_POST["Via"];
            $medicamentos->Laboratorio = $_POST["Laboratorio"];
            $medicamentos->cantidadDosis = $_POST["cantidadDosis"];
            $medicamentos->CategoriaMedicamento_idCategoriaMedicamento = $_POST["CategoriaMedicamento_idCategoriaMedicamento"];
            //guardar datos
            $medicamentos->save();
            //Redirigiendo a la lista de actores
            return Redirect::to('medicamentos');
        }
    }

    public function getDestroy($id) {
        $medicamentos = Medicamento::find($id);
        $medicamentos->delete();

        return Redirect::to('medicamentos/index');
    }
}
