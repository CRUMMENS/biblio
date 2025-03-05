<?php
class TemaController extends Controller{
    
    public function index(){
        return $this->list();
    }
    
    public function list(){
        
        $temas = Tema::all();
        
        return view('tema/list', [
            'temas' => $temas
        ]);
        
    }
    
    public function show(int $id = 0){
        if(!$id)
            throw new NothingToFindException('No se indicó el tema a buscar');
            
            $tema= Tema::find($id);
            
            if(!$tema)
                throw new NotFoundException('No se encontró el tema indicado');
                
                return view('tema/show', [
                    'tema' => $tema
                ]);
    }
    public function create(){
        return view('tema/create');
    }
    
    public function store(){
        
        if(!request()->has('guardar'))
            throw new FormException('No se recibó el formulario');
            
            $socio = new Socio();
            
            $tema->tema                =request()->post('tema');
            $tema->descripcion         =request()->post('descripcion');

            try{
                $tema->save();
                
                Session::success("Guardado del tema $tema->tema correcto.");
                
                return redirect("/Tema/show/$tema->id");
                
                
                
            }catch(SQLException $e){
                Session::error("No se pudo guardar el tema $tema->tema.");
                
                if(DEBUG)
                    throw new SQLException($e->getMessage());
                    
                    return redirect("/Tema/create");
            }
    }
    public function edit(int $id=0){
        $tema =Tema::findOrFail($id, "No se encontro el tema");
        
        return view('tema/edit', [
            'tema'=> $tema
        ]);
    }
    
    public function update(){
        if(!request()->has('actualizar'))
            throw new FormException('No se recibieron datos');
            
            $id= intval(request()->post('id'));
            
            $tema=Tema::findOrFail($id, "No se han encontrado el tema.");
            
            $tema->tema                =request()->post('tema');
            $tema->descripcion         =request()->post('descripcion');
            
            
            try{
                $tema->update();
                Session::success("Actualización del tema $");
                return redirect("/Tema/edit/$id");
                
            }catch(SQLException $e){
                Session::error("Hubo errores en la actualización del tema $tema->tema.");
                
                if(DEBUG)
                    throw new SQLException($e->getMessage());
                    
                    return redirect("/Tema/edit/$id");
            }
    }
    
    
    
    
    
    public function destroy(){
        if(!request()->has('borrar'))
            throw new FromException('No se recibió la confirmación');
            
            $id     =intval(request()->post('id'));
            $tema   =Tema::findOrFail($id);
            
                
                try{
                    $tema->deleteObject();
                    Session::success("Se ha borrado el tema $tema->tema.");
                    return redirect("/Tema/list");
                    
                }catch(SQLException $e){
                    Session::error("No se pudo borrar el tema $tema->tema.");
                    
                    if(DEBUG)
                        throw new SQLException($e->getMessage());
                        
                        return redirect("/Tema/delete/$id");
                }
                
                
    }
    
}