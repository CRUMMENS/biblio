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
    
    
    
    
    
    public function create() {
    
            return view ('user/create');
    }
    
    
    
    
    
    public function store() {
        
        //Esta operación solamente la puede hacer el administrador
        Auth::admin();
        
        //comprueba que llega el formulario 
        if (!request()->has('guardar')) {
            throw new FormException('No se recibió el formulario');
        }
        
        $user = new User(); //crea el nuevo usuario
        
        //recupera el password y lo encripta 
        // No lo cogemos de la Request , pq el saneamiento podria cambiar el password
        $user -> password = md5($_POST['password']);
        $repeat           = md5($_POST['repeatpassword']);
        
        //comprueba que los dos passwords coinciden 
        if ($user->password != $repeat) {
            throw new ValidationException("Las claves no coinciden.") ;
        }
        
        // toma el resto de los valores del formulario
        $user->displayname   = request()->post('displayname');
        $user->email         = request()->post('email');
        $user->phone         = request()->post('phone');
        
        //añade ROLE_USER y el rol que venga del formulario, no pasa nada si  ..
        //.. se repite "ROLE_USER" , el método addRole() elimina las repeticiones . 
        $user->addRole('ROLE_USER' , $this->request->post('roles'));
        
        
        try {
            $user->save();             //guarda el usuario
            
            $file = request()->file (  //recupera la foto
               'picture' ,                                  //nombre del input
                8000000,                                    //tamaño máximo del fichero
                ['image/png' , 'image/jpeg' , 'image/gif']  //tipos aceptados
                );
            
            //si hay fichero, lo guardamos y actualizamos el campo "picture"
            if($file) {
                $user->picture = $file->store('../public/'.USER_IMAGE_FOLDER, 'user_');
                $user->update();    //actualiza el usuario en la BDD para añadir la foto
            }
            
            Session::success("Nuevo usuario $user->displayname creado con éxito");
       
        // si se produce un error de validación ...
        }catch (ValidationException $e) {
            
            Session::error($e->getMessage());
            return redirect("/User/create");
        
        // si se produce un error al guardar en la BDD    
        }catch (SQLException $e) {
            
            Session::error("Se produjo un error al guardar el usuario $user->displayname");
            
            if(DEBUG)  {
                throw new Exception($e->getMessage());
            }
            
            return redirect("/User/create");
            
        //si se produce un error en la subida del fichero ...    
        } catch (UploadException $e) {
            Session::warning ("El usuario se guardó correctamente, 
                               pero no se pudo subir el fichero de imagen.");
            
            if(DEBUG) {
                throw new Exception($e->getMessage());
            }
            
            //redirecciona a la edicion de usuario (ver ejercicios)
            return redirect("/User/edit/$user->id");
        }
               
    }
    
}



