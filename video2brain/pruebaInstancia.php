/**
Respecto al video 2.11.2 al instanciar el objeto no manda el mensaje
sino que lo hace hasta que se llama explícitamente al método contructor
después de ya haberlo instanciado
*/
<?php

class dimeAlgo
{
    public function dimeAlgo($algo)
    {
        echo "lo que te voy a decir es esto: " . $algo;
    }
}

$decir = new dimeAlgo("hola");
$decir->dimeAlgo("hola");
