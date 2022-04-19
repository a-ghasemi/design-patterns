<?php

namespace Structure;

class SingleClass extends Singleton
{
    public $data;

    function execute()
    {
        echo 'My data is: ' . $this->data . "\n";
    }
}