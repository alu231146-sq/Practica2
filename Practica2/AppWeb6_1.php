<?php

//AppWeb7.php
class datos
{
    public $nombre;
    public $paterno;
    public $materno;
    public function __construct($n,$p,$m)
    {
        $this->nombre=$n;
        $this->paterno=$p ;
        $this->materno= $m;
    }
    public function imprimirpersona()
    {
        print "<div><h1 style=color:blue; text align=center>".$this->nombre."\n"."</style></h1></div>";
        print "<div><h1 style=color:red; text align=center>".$this->paterno."\n"."</style></h1></div>";
        print "<div><h1 style=color:violet; text align=center>".$this->materno."\n"."</style></h1></div>";
    }
}
$obj1=new datos("Ana","Alvarez","Alba");
$obj2=new datos("Barbara","Baca","Becerra");
$obj1->imprimirpersona();
$obj2->imprimirpersona();