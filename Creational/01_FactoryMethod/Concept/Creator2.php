<?php

namespace Creational\FactoryMethod\Concept;

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 */
class Creator2 extends AbsCreator
{
    public function factoryMethod(): IProduct
    {
        return new Product2();
    }
}
