<?php
require_once ("Futbolista.php");
class Jugador extends Futbolista {
    private $numeropases;
    private $numerorecuperaciones;

    function __construct($nombre,$dorsal,$numerogoles, $numeropases, $numerorecuperaciones){
        parent::__construct($nombre,$dorsal,$numerogoles);
        $this->numeropases = $numeropases;
        $this->numerorecuperaciones = $numerorecuperaciones;
    }

    public function get_numeropases()
    {
        return $this->numeropases;
    }
    public function set_numeropases($numeropases)
    {
        $this->numeropases = $numeropases;
    }
    public function get_numerorecuperaciones(){
        return $this->numerorecuperaciones;
    }
    public function set_numerorecuperaciones($numerorecuperaciones)
    {
        $this->numerorecuperaciones = $numerorecuperaciones;
    }

    public function __toString()
    {
        return parent::__toString() ." Valor: " .$this->valoracion($this->get_numerogoles(), $this->get_numeropases(), $this->get_numerorecuperaciones());
    }

    public function valoracion($numerogoles, $numeropases, $numerorecuperaciones){
        $valor = ($numeropases*2)+($numerorecuperaciones*3)+($numerogoles*30);
        return $valor;
    }
}