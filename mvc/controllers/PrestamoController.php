<?php
class PrestamoController extends Controller{
    
    public function index(){
        return $this->list();
    }
    
    
    
    
    
    public function list(){
        
        //recupera todos los prestamos
        $prestamos = Libro::all();
        
        //carga la vista que los muestra
        return view('prestamo/list', [
            'prestamos' => $prestamos
        ]);
        
    }
    
    public function show(int $id = 0){
        
        //comprueba que llega el ID
        if(!$id)
            throw new NothingToFindException('No se indicó el prestamo a buscar');
            
            //busca el prestamo con ese ID
            $prestamo= Prestamo::find($id);
            
            //comprueba que existe ese libro
            if(!$prestamo)
                throw new NotFoundException('No se encontró el prestamo indicado');
                
                //carga la vista y le pasa el prestamo recuperado
                return view('prestamo/show', [
                    'prestamo' => $prestamo
                ]);
    }
    
    
    
    public function create(){
        return view('prestamo/create');
    }
    
    
    
    
    
    public function store(){
        
        if(!request()->has('guardar'))
            throw new FormException('No se recibó el formulario');
            
            $prestamo = new Prestamo();
            
            $prestamo->id               =request()->post('id');
            $prestamo->socio            =request()->post('socio');
            $prestamo->ejemplar         =request()->post('ejemplar');
            $prestamo->titulo           =request()->post('titulo');
            $prestamo->limite           =request()->post('limite');
            $prestamo->devolucion       =request()->post('devolucion');
           
            
            
            try{
                $prestamo->save();
                
                Session::success("Guardado del prestamo $prestamo->id correcto.");
                
                return redirect("/Prestamo/show/$prestamo->id");
                
                
                
            }catch(SQLException $e){
                Session::error("No se pudo guardar el prestamo $prestamo->id.");
                
                if(DEBUG)
                    throw new SQLException($e->getMessage());
                    
                    return redirect("/Prestamo/create");
            }
    }
    
    
    
    
    public function edit(int $id=0){
        $prestamo =Prestamo::findOrFail($id, "No se encontro el prestamo");
        
        return view('prestamo/edit', [
            'prestamo'=> $prestamo
        ]);
    }
    
    
    
    
    
    public function update(){
        if(!request()->has('actualizar'))
            throw new FormException('No se recibieron datos');
            
            $id= intval(request()->post('id'));
            
            $prestamo=Prestamo::findOrFail($id, "No se han encontrado el prestamo.");
            
            $prestamo->id               =request()->post('id');
            $prestamo->socio            =request()->post('socio');
            $prestamo->ejemplar         =request()->post('ejemplar');
            $prestamo->titulo           =request()->post('titulo');
            $prestamo->limite           =request()->post('limite');
            $prestamo->devolucion       =request()->post('devolucion');
            
            try{
                $prestamo->update();
                Session::success("Actualización del prestamo $");
                return redirect("/Prestamo/edit/$id");
                
            }catch(SQLException $e){
                Session::error("Hubo errores en la actualización del prestamo $prestamo->id.");
                
                if(DEBUG)
                    throw new SQLException($e->getMessage());
                    
                    return redirect("/Prestamo/edit/$id");
            }
    }
    
    
    
    
    public function delete (int $id = 0) {
        
        $prestamo = Prestamo::findOrFail($id , "No existe el prestamo");
        
        return view('prestamo/delete' , [
            'prestamo' => $prestamo
        ]);
    }
    
    
    
    
    public function destroy(){
        if(!request()->has('borrar'))
            throw new FromException('No se recibió la confirmación');
            
            $id     =intval(request()->post('id'));
            $libro  =Libro::findOrFail($id);
            
            if($libro->hasAny('Ejemplar'))
                throw new Exception("No se puede borrar el libro mientras tenga ejemplares.");
                
                try{
                    $libro->deleteObject();
                    Session::success("Se ha borrado el libro $libro->titulo.");
                    return redirect("/Libro/list");
                    
                }catch(SQLException $e){
                    Session::error("No se pudo borrar el libro $libro->titulo.");
                    
                    if(DEBUG)
                        throw new SQLException($e->getMessage());
                        
                        return redirect("/Libro/delete/$id");
                }
                
                
    }
    
}