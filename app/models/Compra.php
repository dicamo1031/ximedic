<?php

class Compra extends Eloquent{

    protected $table = "compra";
    protected $primaryKey = "idCompra";
    public $timestamps = false;

    public function detalleCom()
    {
        return $this->hasOne('DetalleCompra');
    }

}
