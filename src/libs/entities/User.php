<?php

class User implements Serializable
{
    private $id;
    private $name;
    private $profession;

    function __construct($id, $name, $profession)
    {
        $this->id = $id;
        $this->name = $name;
        $this->profession = $profession;
    }

    public function getId()
    {
        return $this->id;
    }

    function serialize()
    {
        return serialize($this);
    }

    function unserialize($data)
    {
        
    }
}
?>