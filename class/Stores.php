<?php
class Stores
{
    private $idStore;
    private $nameStore;
    
    public function getIdStore()
    {
        return $this->idStore;
    }

    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;

        return $this;
    }

    public function getNameStore()
    {
        return $this->nameStore;
    }

    public function setNameStore($nameStore)
    {
        $this->nameStore = $nameStore;

        return $this;
    }

    public function __construct() {
        $test = null;
    }

}

?>