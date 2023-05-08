<?php

require_once __DIR__ . '/../Traits/Weightable.php';
require_once __DIR__ . '/Item.php';

class Product extends Item {

    use Weightable;

}