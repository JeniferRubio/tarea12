<?php

namespace App\Models;

class Curso
{
   private $asignatura;

   private $codigo;
   
   private $docente;

   public function __Curso($asignatura,$codigo,$docente)
   {
      $this->asignatura=$asignatura;
      $this->codigo=$codigo;
      $this->docente=$docente;
   }

   public function getAsignatura()
   {
    return  $this->asignatura;
   }
   public function getCodigoCu()
   {
    return  $this->codigo;
   }
   public function getDocente()
   {
    return  $this->docente;
   }
}