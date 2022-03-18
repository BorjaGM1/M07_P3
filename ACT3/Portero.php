<?php
require_once ("Futbolista.php");
class Portero extends Futbolista {
    private $numeroparadas;

    function __construct($nombre,$dorsal,$numerogoles, $numeroparadas){
        parent::__construct($nombre,$dorsal,$numerogoles);
        $this->numeroparadas = $numeroparadas;
    }

    public function get_numeroparadas()
    {
        return $this->numeroparadas;
    }
    public function set_numeroparadas($numeroparadas)
    {
        $this->numeroparadas = $numeroparadas;
    }
    function __toString()
    {
        return parent::__toString() ." Valor: " .$this->valoracion($this->get_numeroparadas(), $this->get_numerogoles());
    }

    public function valoracion($numeroparadas, $numerogoles){
        return ($numeroparadas*5)+($numerogoles*30);
    }
}