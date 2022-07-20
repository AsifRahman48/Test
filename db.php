<?php

class database{
    private $host;
    private $bdusername;
    private $bdpassword;
    private $bdname;

    protected function connect(){
        $this->host='localhost';
        $this->bdusername='root';
        $this->bdpassword='';
        $this->bdname='curd';

        $con=new mysqli($this->host,$this->bdusername,$this->bdpassword,$this->bdname);
        return $con;
    }

}

?>