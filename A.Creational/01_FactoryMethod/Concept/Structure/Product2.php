<?php

namespace Concept\Structure;

/**
 * Concrete Products provide various implementations of the Product interface.
 */
class Product2 implements IProduct
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}