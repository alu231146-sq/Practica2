<?php
//AppWeb6.php
class datos
{
    public $titulo;
    public $nombre;
    public $paterno;
    public $materno;
    public $fechanac;
    public $edad;
    public $direccion;
    public $telefono;
    public $nombre2;
    public $paterno2;
    public $materno2;
    public $fechanac2;
    public $edad2;
    public $direccion2;
    public $telefono2;
    public function __construct()
    {
        $this->titulo="Datos personales";
        $this->nombre= "Nombre: Carlos ";
        $this->paterno= "Paterno: Santa Maria";
        $this->materno= "Materno :Ortiz ";
        $this->fechanac= "Fecha nacimiento: 10 de octubre del 2008";
        $this->edad= "Edad: 16";
        $this->direccion= "Direccion: Martin Luis Guzman 2519";
        $this->telefono= "Telefono: 656-222-9304 ";
        $this->nombre2= "Nombre : David ";
        $this->paterno2= "Paterno: pacheco";
        $this->materno2= "Materno: Ruiz ";
        $this->fechanac2= "Fecha nacimiento: 25 de enero del 2008";
        $this->edad2= "Edad: 17";
        $this->direccion2= "Direccion :Cbtis114";
        $this->telefono2= "Telefono: 656-233-0854";
    }
    public function imprimirpersona1()
    {
        print "<h1 style=color:blue; text align=left>".$this->titulo."\n"."</style></h1>";
        print "<h2 style=color:blue; text align=right>".$this->titulo."\n"."</style></h2>";
        print "<h2 style=color:red; text align=left>".$this->nombre."\n"."</style></h2>";
        print "<h2 style=color:red; text align=right>".$this->nombre2."\n"."</style></h2>";
        print "<h2 style=color:violet; text align=left>".$this->paterno."\n"."</style></h2>";
        print "<h2 style=color:violet; text align=right>".$this->paterno2."\n"."</style></h2>";
        print "<h2 style=color:pink; text align=left>".$this->materno."\n"."</style></h2>";
        print "<h2 style=color:pink; text align=right>".$this->materno2."\n"."</style></h2>";
        print "<h2 style=color:orange; text align=left>".$this->fechanac."\n"."</style></h2>";
        print "<h2 style=color:orange; text align=right>".$this->fechanac2."\n"."</style></h2>";
        print "<h2 style=color:green; text align=left>".$this->direccion."\n"."</style></h2>";
        print "<h2 style=color:green; text align=right>".$this->direccion2."\n"."</style></h2>";
        print "<h2 style=color:yellow;  text align=left>".$this->telefono."\n"."</style></h2>";
        print "<h2 style=color:yellow;  text align=right>".$this->telefono2."\n"."</style></h2>";
        
    }
   
}
$obj=new datos;
$obj->imprimirpersona1();
