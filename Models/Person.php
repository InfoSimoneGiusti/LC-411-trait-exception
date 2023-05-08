<?php

require_once __DIR__ . '/../Traits/Weightable.php';

class Person {

    use Weightable;

    public $name;
    public $lastname;

    /**
     * 
     */
    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    /**
     * Calcola eta della persona
     * 
     * metodo richiamabile pubblicamente che consente di calcolare l'eta della persona a partire dal suo anno di nascita
     * @param int $yob anno di nascita
     * @return string Ritorna una stringa contenente l'anno di nascita
     */
    public function calcAge($yob) {

        $now = date("Y");

        if (!is_numeric($yob)) {
            throw new Exception('Il valore passato non è un numero valido');
        } else if ($yob < 1900 || $yob > $now) {
            throw new Exception('Anno di nascita non valido');
        }

        return "Hai " . ($now - $yob) . ' anni';

    }

}