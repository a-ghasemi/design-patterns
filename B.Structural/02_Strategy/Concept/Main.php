<?php

namespace Concept;

use Structure\Context;
use Structure\IStrategyA;
use Structure\IStrategyB;

require_once './vendor/autoload.php';

/**
 * The client code picks a concrete strategy and passes it to the context. The
 * client should be aware of the differences between strategies in order to make
 * the right choice.
 */
$context = new Context(new IStrategyA());
echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reverse sorting.\n";
$context->setStrategy(new IStrategyB());
$context->doSomeBusinessLogic();