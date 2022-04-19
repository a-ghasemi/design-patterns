<?php

namespace Concept;

use Structure\ObserverA;
use Structure\ObserverB;
use Structure\Subject;

require_once './vendor/autoload.php';

$subject = new Subject();

$o1 = new ObserverA();
$subject->attach($o1);

$o2 = new ObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();