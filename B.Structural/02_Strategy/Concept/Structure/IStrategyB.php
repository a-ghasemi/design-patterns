<?php

namespace Structure;

class IStrategyB implements IStrategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}