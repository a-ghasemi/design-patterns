<?php

namespace Structure;

/**
 * Each Concrete Factory has a corresponding product variant.
 */
class Factory2 implements IFactory
{
    public function createProductA(): IProductA
    {
        return new ProductA2();
    }

    public function createProductB(): IProductB
    {
        return new ProductB2();
    }
}