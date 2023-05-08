<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/DigitalSupport.php';
require_once __DIR__ . '/Models/User.php';

$proteine = new Product('Proteine', 100);
$proteine->setWeight(500, 'g');

echo $proteine->getWeight();

$consulenza = new DigitalSupport('Ti insegno a dimagrire', 50);
//$consulenza->setWeight(500, 'g');

$simone = new User('simone', 'giusti', 'sg@sg.it', '123stella');
$simone->setWeight(115, 'kg');
echo $simone->getWeight();


$mario = new Person('mario', 'rossi');

try {
    echo $mario->calcAge('ciao');
} catch (Exception $e) {
    var_dump($e);
    echo "Si è verificato un errore: " . $e->getMessage();
}
 