<?php

namespace Creational\FactoryMethod\Concept;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface IProduct
{
    public function operation(): string;
}
