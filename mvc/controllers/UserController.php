<?php

class UserController extends Controller {
    
    /*
     * Carga la vista "home" para el usuario identificado
     * 
     * @return ViewResponse
     * 
     */
    
    public function home() {
        
        Auth::check(); //autorización (solo usuarios identificados)
        
        //carga la vista la home y le pasa el usuario identificado
        //el usuario se puede recuperar mediante el metodo Login::user()
        return view ('user/home' , [
            'user' -> Login::user()
        ]);   
    }
}