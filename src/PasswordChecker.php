<?php

namespace App;



class PasswordChecker
{
    private $p;
    private $nombre;

    public function __construct(string $p)
    {
        $this->$p = $p;
        $this->nombre = 8;
    }

    public function passwordCheck2()
    {
    
        $longueur = strlen($this->p);

        if ($longueur>$this->p){
            return true;
        } else {
            return false;
        }
    }    
        

}
?>