<?php


class Medicamento extends Eloquent {
    //para una clase active record en laravel no es necesario
    //1.Poner los atributos de la tabla
    protected $table="medicamentos";
    protected $primaryKey = "id_medicamento";
    public $timestamps = false;
}
