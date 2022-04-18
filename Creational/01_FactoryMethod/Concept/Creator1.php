<?php

namespace Concept;

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 */
class Creator1 extends AbsCreator
{
    /**
     * Note that the signature of the method still uses the abstract product
     * type, even though the concrete product is actually returned from the
     * method. This way the Creator can stay independent of concrete product
     * classes.
     */
    public function factoryMethod(): IProduct
    {
        return new Product1();
    }
}
