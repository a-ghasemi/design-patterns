<?php

namespace Concept\Structure;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface IProduct
{
    public function operation(): string;
}
