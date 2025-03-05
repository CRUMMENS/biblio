<?php 
class LibroController extends Controller{

    public function index(){
        return $this->list();
    }
    
    public function list(){
        
        $libros = Libro::all();
        
        return view('libro/list', [
            'libros' => $libros
        ]);
        
    }
    
     public function show(int $id = 0){
            if(!$id)
                throw new NothingToFindException('No se indicó el libro a buscar');
                
                $libro= Libro::find($id);
                
                if(!$libro)
                    throw new NotFoundException('No se encontró el libro indicado');
                    
                    return view('libro/show', [
                        'libro' => $libro
                    ]);
        }
        public function create(){
            return view('libro/create');
        }
        
        public function store(){
            
            if(!request()->has('guardar'))
                throw new FormException('No se recibó el formulario');
            
         $libro = new Libro(); 
         
         $libro->isbn               =request()->post('isbn');
         $libro->titulo             =request()->post('titulo');
         $libro->editorial          =request()->post('editorial');
         $libro->autor              =request()->post('autor');
         $libro->idioma             =request()->post('idioma');
         $libro->edicion            =request()->post('edicion');
         $libro->anyo               =request()->post('anyo');
         $libro->edadrecomendada    =request()->post('edadrecomendada');
         $libro->paginas            =request()->post('paginas');
         $libro->caracteristicas    =request()->post('caracteristicas');
         $libro->sinopsis           =request()->post('sinopsis');
    
   
        try{
            $libro->save();
            
            Session::success("Guardado del libro $libro->titulo correcto.");
            
            return redirect("/Libro/show/$libro->id");
            
   
        
        }catch(SQLException $e){
            Session::error("No se pudo guardar el libro $libro->titulo.");
            
            if(DEBUG)
                throw new SQLException($e->getMessage());
            
            return redirect("/Libro/create");
            }
         }
        public function edit(int $id=0){
            $libro =Libro::findOrFail($id, "No se encontro el libro");
            
            return view('libro/edit', [
                'libro'=> $libro
            ]);
        }
    
        public function update(){
            if(!request()->has('actualizar'))
                throw new FormException('No se recibieron datos');
            
             $id= intval(request()->post('id'));
             
             $libro=Libro::findOrFail($id, "No se han encontrado el libro.");
             
             $libro->isbn               =request()->post('isbn');
             $libro->titulo             =request()->post('titulo');
             $libro->editorial          =request()->post('editorial');
             $libro->autor              =request()->post('autor');
             $libro->idioma             =request()->post('idioma');
             $libro->edicion            =request()->post('edicion');
             $libro->anyo               =request()->post('anyo');
             $libro->edadrecomendada    =request()->post('edadrecomendada');
             $libro->paginas            =request()->post('paginas');
             $libro->caracteristicas    =request()->post('caracteristicas');
             $libro->sinopsis           =request()->post('sinopsis');
             
             try{
                 $libro->update();
                 Session::success("Actualización del libro $");
                 return redirect("/Libro/edit/$id");
                 
             }catch(SQLException $e){
                 Session::error("Hubo errores en la actualización del libro $libro->tirulo.");
                 
                 if(DEBUG)
                     throw new SQLException($e->getMessage());
             
             return redirect("/Libro/edit/$id");
             }
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