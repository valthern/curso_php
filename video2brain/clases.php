<?php
include_once "_constantes.php";

class DimeAlgo
{
    var $atributo;

    // Función constructora
    function DimeAlgo($algo)
    {
        // Los atributos se usan dentro de la clase sin el '$'
        $this->atributo = $algo;
        echo $this->atributo;
    }
}

class Saluda
{
    public function saludo()
    {
        echo "Yo te saludo" . BR;
    }

    public function adios()
    {
        echo "Yo te digo adiós" . BR;
    }
}

class SubSaluda extends Saluda 
{
    
}
 

$decir = new DimeAlgo("Hola");
$decir->DimeAlgo("HOLA!");

echo BR . BR;

$instancia = new Saluda();
$instancia->saludo();
$instancia->adios();
