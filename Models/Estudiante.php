<?php

namespace App\Models;
class Estudiante
{
    private $nombres;
    private $codigoAlum;

    private $dni;

    public function __Estudiante($nombres,$codigoAlum,$dni)
    {
       $this->nombres= $nombres;
       $this->dni= $dni;
       $this->codigoAlum= $codigoAlum;
    }
    
    public function getNombres()
    {
        return $this->nombres;
    }
    public function getCodigo()
    {
        return $this->codigoAlum;
    }
    public function getDni()
    {
        return $this->dni;
    }


}