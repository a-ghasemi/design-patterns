<?php

namespace Structure;

class Twitter implements SocialNetwork
{
    protected $username;
    protected $password;

    protected $text;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function setContent($content)
    {
        $this->text = $content;
    }

    public function connect()
    {
        echo sprintf("using %s and %s to login to twitter\n", $this->username, $this->password);
    }

    public function post()
    {
        echo sprintf("posting the content to twitter:%s\n", $this->text);
    }
}