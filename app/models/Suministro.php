<?php

class Suministro extends Eloquent{

    protected $table = "suministro";
    protected $primaryKey = "idSuministro";
    public $timestamps = false;

    public function medicamento(){

      return $this->hasMany('medicamento','CategoriaMedicamento_idCategoriaMedicamento');
   }

}
