<?php

require_once __DIR__. '/../vendor/autoload.php';



use App\Controllers\MatriculaControlador;
use App\Models\Curso;
use App\Models\Estudiante;

$controlador1 = new MatriculaControlador();
$controlador1->setEstudiante (new Estudiante('jenifer',123445, 65427686));

$controlador = new MatriculaControlador();
$controlador-> agregarCurso(new Curso('programación',12345,'Roger lopez'));
$controlador-> agregarCurso(new Curso('lenguaje',123489,'Romeo'));
$controlador-> agregarCurso(new Curso('matematica',1278489,'Romina'));

foreach($controlador->listarCurso() as $curso)
{
    echo "asignatura: ".$curso->getAsignatura()."\n";
    echo "codigo de curso: ".$curso->getCodigoCu()."\n";
    echo "docente: ".$curso->getDocente()."\n";

    foreach($controlador1-> getEstudiante() as $estudiante)
    {
        echo "nombres: ".$estudiante->getNombres(). "\n";
        echo "codigo: ".$estudiante->getCodigo(). "\n";
        echo "dni: ".$estudiante->getDni(). "\n";
    }
}