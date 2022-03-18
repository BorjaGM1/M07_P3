<?php
class Futbolista{
    private $nombre;
    private $dorsal;
    private $numerogoles;

    function __construct($nombre,$dorsal,$numerogoles){
        $this->nombre = $nombre;
        $this->dorsal = $dorsal;
        $this->numerogoles = $numerogoles;
    }

    public function get_nombre()
    {
        return $this->nombre;
    }
    public function set_nombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function get_dorsal()
    {
        return $this->dorsal;
    }
    public function set_dorsal($dorsal)
    {
        $this->dorsal = $dorsal;
        return $this;
    }
    public function get_numerogoles()
    {
        return $this->numerogoles;
    }
    public function set_numerogoles($numerogoles)
    {
        $this->numerogoles = $numerogoles;
        return $this;
    }
    function __toString(){
        return "Nombre: ".$this->get_nombre()." Dorsal: ".$this->get_dorsal();
    }
}