<?php

namespace Structure;

/**
 * Concrete Strategies implement the algorithm while following the base Strategy
 * interface. The interface makes them interchangeable in the Context.
 */
class IStrategyA implements IStrategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}