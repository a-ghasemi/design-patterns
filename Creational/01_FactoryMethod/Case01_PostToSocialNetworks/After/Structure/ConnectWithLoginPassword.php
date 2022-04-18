<?php

namespace Structure;

class ConnectWithLoginPassword implements ISocialNetworkConnect
{
    protected string $login;
    protected string $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function connect()
    {
        echo sprintf("using %s and %s to login\n", $this->login, $this->password);
    }
}