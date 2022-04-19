<?php

namespace Concept;

use Structure\Singleton;
use Structure\SingleClass;

require_once './vendor/autoload.php';

echo "You can use singleton class directly:\n";

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
echo "\n\n";
echo "or, You can use inherited class:\n";

$p1 = SingleClass::getInstance();
$p2 = SingleClass::getInstance();

$p1->data = 1;
$p2->data = 2;

$p1->execute();
$p2->execute();
