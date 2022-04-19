<?php
namespace App;

require_once './vendor/autoload.php';

class Main
{
    public function run(){
        printf('main in running');
    }
}

$main = new Main;
$main->run();