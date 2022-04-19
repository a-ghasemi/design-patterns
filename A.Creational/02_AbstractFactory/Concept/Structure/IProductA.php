<?php

namespace Structure;

/**
 * Each distinct product of a product family should have a base interface. All
 * variants of the product must implement this interface.
 */
interface IProductA
{
    public function usefulFunctionA(): string;
}