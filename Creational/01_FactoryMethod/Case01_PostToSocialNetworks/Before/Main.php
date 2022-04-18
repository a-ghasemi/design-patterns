<?php

namespace App;

require_once './vendor/autoload.php';

use Structure\Facebook;
use Structure\SocialNetwork;

class Main
{
    protected SocialNetwork $social_network;

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
        return new Facebook('LOGIN', 'PASSWORD');
    }
}

$main = new Main;
$main->run();