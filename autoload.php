<?php
    //función usada para buscar las clases
    function load(String $clase){
        
        //para cada directorio de la lista
        foreach (AUTOLOAD_DIRECTORIES as $directorio){
            
            $ruta = "$directorio/$clase.php";   //calcula la ruta
            
            if (is_readable($ruta)){            //si es legible..
                
                require_once $ruta;             //cargar la clase
                break;                          //ahorra iteraciones
                ;
            }
        }
    }
    
    //registrar la función de autoload anterior
    spl_autoload_register('load');