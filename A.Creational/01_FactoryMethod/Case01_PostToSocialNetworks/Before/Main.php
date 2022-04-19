<?php

namespace App;

require_once './vendor/autoload.php';

use Structure\Facebook;
use Structure\ISocialNetwork;
use Structure\Twitter;

class Main
{
    protected ISocialNetwork $social_network;

    public function run()
    {
        $this->social_network = $this->setSocialNetwork();
        $this->social_network->connect();
        $this->postContent('this is a test');
    }

    protected function postContent(string $content)
    {
        $this->social_network->setContent($content);
        $this->social_network->post();
    }

    protected function setSocialNetwork()
    {
//        return new Facebook('LOGIN', 'PASSWORD');
        return new Twitter('Username', 'PASSWORD');
    }
}

$main = new Main;
$main->run();