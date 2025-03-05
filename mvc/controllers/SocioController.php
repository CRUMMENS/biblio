<?php
class SocioController extends Controller{
    
    public function index(){
        return $this->list();
    }
    
    public function list(){
        
        $socios = Socio::all();
        
        return view('socio/list', [
            'socios' => $socios
        ]);
        
    }
    
    public function show(int $id = 0){
        if(!$id)
            throw new NothingToFindException('No se indicó el socio a buscar');
            
            $socio= Socio::find($id);
            
            if(!$socio)
                throw new NotFoundException('No se encontró el socio indicado');
                
                return view('socio/show', [
                    'socio' => $socio
                ]);
    }
    public function create(){
        return view('socio/create');
    }
    
    public function store(){
        
        if(!request()->has('guardar'))
            throw new FormException('No se recibó el formulario');
            
            $socio = new Socio();
            
            $socio->nombre               =request()->post('nombre');
            $socio->apellidos            =request()->post('apellidos');
            $socio->dni                  =request()->post('dni');
            $socio->nacimiento           =request()->post('nacimiento');
            $socio->email                =request()->post('email');
            $socio->direccion            =request()->post('direccion');
            $socio->cp                   =request()->post('cp');
            $socio->poblacion            =request()->post('poblacion');
            $socio->provincia            =request()->post('provincia');
            $socio->telefono             =request()->post('telefono');
           
            
            
            try{
                $socio->save();
                
                Session::success("Guardado del socio $socio->nombre $socio->apellidos  correcto.");
                
                return redirect("/Socio/show/$socio->id");
                
                
                
            }catch(SQLException $e){
                Session::error("No se pudo guardar el socio $socio->nombre $socio->apellidos.");
                
                if(DEBUG)
                    throw new SQLException($e->getMessage());
                    
                    return redirect("/Socio/create");
            }
    }
    public function edit(int $id=0){
        $socio =Socio::findOrFail($id, "No se encontro el socio");
        
        return view('socio/edit', [
            'socio'=> $socio
        ]);
    }
    
    public function update(){
        if(!request()->has('actualizar'))
            throw new FormException('No se recibieron datos');
            
            $id= intval(request()->post('id'));
            
            $socio=Socio::findOrFail($id, "No se han encontrado el socio.");
            
            $socio->nombre               =request()->post('nombre');
            $socio->apellidos            =request()->post('apellidos');
            $socio->dni                  =request()->post('dni');
            $socio->nacimiento           =request()->post('nacimiento');
            $socio->email                =request()->post('email');
            $socio->direccion            =request()->post('direccion');
            $socio->cp                   =request()->post('cp');
            $socio->poblacion            =request()->post('poblacion');
            $socio->provincia            =request()->post('provincia');
            $socio->telefono             =request()->post('telefono');
            
            try{
                $socio->update();
                Session::success("Actualización del socio $");
                return redirect("/Socio/edit/$id");
                
            }catch(SQLException $e){
                Session::error("Hubo errores en la actualización del socio $socio->nombre $socio->apellidos.");
                
                if(DEBUG)
                    throw new SQLException($e->getMessage());
                    
                    return redirect("/Socio/edit/$id");
            }
    }
    
    
    
    
    
    public function destroy(){
        if(!request()->has('borrar'))
            throw new FromException('No se recibió la confirmación');
            
            $id     =intval(request()->post('id'));
            $libro  =Socio::findOrFail($id);
            
            if($socio->hasAny('Prestamo'))
                throw new Exception("No se puede borrar un socio si tiene prestamos.");
                
                try{
                    $socio->deleteObject();
                    Session::success("Se ha borrado el socio $socio->nombre $socio->apellidos.");
                    return redirect("/Libro/list");
                    
                }catch(SQLException $e){
                    Session::error("No se pudo borrar el socio $socio->nombre $socio->apellidos.");
                    
                    if(DEBUG)
                        throw new SQLException($e->getMessage());
                        
                        return redirect("/Socio/delete/$id");
                }
                
                
    }
    
}