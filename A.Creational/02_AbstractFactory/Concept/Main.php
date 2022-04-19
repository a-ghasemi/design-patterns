<?php

namespace Concept;

use Structure\IFactory;
use Structure\Factory1;
use Structure\Factory2;

require_once './vendor/autoload.php';

/**
 * The client code works with factories and products only through abstract
 * types: AbstractFactory and AbstractProduct. This lets you pass any factory or
 * product subclass to the client code without breaking it.
 */
function clientCode(IFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

/**
 * The client code can work with any concrete factory class.
 */
echo "Client: Testing client code with the first factory type:\n";
clientCode(new Factory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new Factory2());