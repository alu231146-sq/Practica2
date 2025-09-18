<?php
//Programa para mostrar Portada de Clase
//Creado por Carlos Alejandro Santa Maria Ortiz
//Fecha : 18/Septiembre/2025
//AppWeb5.php
class Portada
{
    public $escuela;
    public $materia;
    public $alumno;
    public $profesor;
    public $grado;
    public $grupo;
    public $fecha;
    public function __construct()
    {
        $this->escuela= "Centro de Bachillerato Tecnologico Industrial y de Servicios 114 ";
        $this->materia= "Construye Aplicaciones Web";
        $this->alumno= "Carlos Santa Maria ";
        $this->profesor= "Sergio Gonzales";
        $this->grado= "5 ";
        $this->grupo= "Q ";
        $this->fecha= "18 de Septiembre del 2025 ";
    }
    public function imprimirportada()
    {
        print "<h1 style=color:blue; text align=center>".$this->escuela."\n"."</style></h1>";
        print "<h2 style=color:red; text align=center>".$this->materia."\n"."</style></h2>";
        print "<h2 style=color:violet; text align=center>".$this->alumno."\n"."</style></h2>";
        print "<h2 style=color:pink; text align=center>".$this->profesor."\n"."</style></h2>";
        print "<h2 style=color:orange; text align=center>".$this->grado."\n"."</style></h2>";
        print "<h2 style=color:green; text align=center>".$this->grupo."\n"."</style></h2>";
        print "<h2 style=color:yellow;  text align=center>".$this->fecha."\n"."</style></h2>";
    }
}
$obj=new portada;
$obj->imprimirportada();