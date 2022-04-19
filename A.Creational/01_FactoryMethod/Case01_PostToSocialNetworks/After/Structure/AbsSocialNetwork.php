<?php

namespace Structure;

abstract class AbsSocialNetwork
{
    abstract protected function factoryMethod(): ISocialNetworkConnect;

    public function connect(){
        $connection = $this->factoryMethod();
        $connection->connect();
    }
}