<?php



class DetalleDonacion extends Eloquent {
    //para una clase active record en laravel no es necesario
    //1.Poner los atributos de la tabla
    protected $table="detalledonacion";
    protected $primaryKey = "idDetalleDonacion";
    public $timestamps = false;

    
}
