<?php

require_once('../../conexion.php');

class recuperar extends conexion
{
    public function __construct()
    {
        $this->db=parent::__construct();
    }
    public function getdb()
    {
        return $this->db;
    }
}
?>
