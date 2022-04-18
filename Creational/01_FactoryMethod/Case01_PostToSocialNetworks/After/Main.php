<?php

namespace App;

use Structure\Facebook;

require_once './vendor/autoload.php';

class Main
{
    public function run()
    {
        $item = new Facebook('LOGIN', 'PASSWORD');
        $item->connect();
    }
}

$main = new Main;
$main->run();