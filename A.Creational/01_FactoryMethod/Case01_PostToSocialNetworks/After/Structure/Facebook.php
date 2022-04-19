<?php

namespace Structure;

class Facebook extends AbsSocialNetwork
{
    protected string $login;
    protected string $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    protected function factoryMethod(): ISocialNetworkConnect
    {
        return new ConnectWithLoginPassword($this->login, $this->password);
    }
}