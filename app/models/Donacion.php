<?php


class Donacion extends Eloquent {
    //para una clase active record en laravel no es necesario
    //1.Poner los atributos de la tabla
    protected $table="donacion";
    protected $primaryKey = "idDonacion";
    public $timestamps = false;

    public function dedonacion(){
      return $this->hasOne('detalledonacion');
    }
}
