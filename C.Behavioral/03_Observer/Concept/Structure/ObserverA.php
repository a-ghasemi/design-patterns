<?php

namespace Structure;

/**
 * Concrete Observers react to the updates issued by the Subject they had been
 * attached to.
 */
class ObserverA implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state < 3) {
            echo "ConcreteObserverA: Reacted to the event.\n";
        }
    }
}