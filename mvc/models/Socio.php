<?php
class Socio extends Model{
    
    /**
     * Recupera los prestamos de un socio
     *
     * @return array lista de prestamos del socio
     */
    
    public function getPrestamos():array{
        $consulta = "SELECT * FROM prestamos WHERE idsocio=$this->id";
        
        //retorna una lista de Ejemplar
        return DBMysqli::selectAll($consulta, 'Prestamo');
    }
}
