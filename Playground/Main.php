<?php

namespace Concept;

use Structure\IHandler;
use Structure\MonkeyHandler;
use Structure\SquirrelHandler;
use Structure\DogHandler;

require_once './vendor/autoload.php';

/**
 * The client code is usually suited to work with a single handler. In most
 * cases, it is not even aware that the handler is part of a chain.
 */
function clientCode(IHandler $handler)
{
    foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
        echo "Client: Who wants a " . $food . "?\n";
        $result = $handler->handle($food);
        if ($result) {
            echo "  " . $result;
        } else {
            echo "  " . $food . " was left untouched.\n";
        }
    }
}

/**
 * The other part of the client code constructs the actual chain.
 */
$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($squirrel)->setNext($dog);

/**
 * The client should be able to send a request to any handler, not just the
 * first one in the chain.
 */
echo "Chain: Monkey > Squirrel > Dog\n\n";
clientCode($monkey);
echo "\n";

echo "Subchain: Squirrel > Dog\n\n";
clientCode($squirrel);