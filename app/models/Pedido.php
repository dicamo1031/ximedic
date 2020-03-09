<?php

class Pedido extends Eloquent {
    protected $table = "pedido";
    protected $primaryKey = "idPedido";
    public $timestamps = false;

    public function medicamentos(){
    return $this->belongsToMany('medicamento','medicamento_has_pedido',
                                'Pedido_idPedido','Medicamento_idMedicamento');
    }
    public function cMedicamento(){
      return $this->hasMany('medicamento','CategoriaMedicamento_idCategoriaMedicamento');
    }
}
