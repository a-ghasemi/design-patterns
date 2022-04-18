<?php

namespace Structure;

class Facebook implements SocialNetwork
{
    protected $login;
    protected $password;

    protected $text;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function setContent($content)
    {
        $this->text = $content;
    }

    public function connect()
    {
        echo sprintf("using %s and %s to login to facebook\n", $this->login, $this->password);
    }

    public function post()
    {
        echo sprintf("posting the content to facebook:%s\n", $this->text);
    }
}