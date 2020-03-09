<?php

class LoginController extends BaseController{

    public function showLogin (){
        //Mostrar el formulario de login
        return View::make('login.login');
    }

   public function postLogin(){

        //Datos a autenticar
        $datos = array (
                    "username" => Input::get("usuario"),
                    "password" => Input::get("password")
                );

       if(Auth::attempt($datos)){
         $user =  Auth::User();
            Session::put("usuario",$_POST["usuario"]);
            //redirigir a una ruta
          return Redirect::to('medicamentos');

          }else{
            //usuario no autenticado
            // Redirijo a login, incloutendo un mensaje
            return Redirect::to('login')->with('error', 'Usuario o Clave Incorrectos!');
       }
    }

    public function getLogout(){
        //Cierro de sesion
        Auth::logout();
        //Destruir variables de sesion
          Session::forget('usuario');
        //Redirigir al login
        return Redirect::to('login')->with('error_message', 'Gracias por visitarnos!');
    }


}
