<?php
class Libro extends Model{
    
    protected static $fillable= [
        'isbn','titulo','editorial','idioma',
        'autor','edicion','anyo','edadrecomendada',
        'portada','caracteristicas','sinopsis','paginas',
    ];
}
