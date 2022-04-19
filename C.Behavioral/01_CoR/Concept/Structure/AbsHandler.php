<?php

namespace Structure;

/**
 * The default chaining behavior can be implemented inside a base handler class.
 */
abstract class AbsHandler implements IHandler
{
    /**
     * @var IHandler
     */
    private $nextHandler;

    public function setNext(IHandler $handler): IHandler
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will let us link handlers in a
        // convenient way like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    public function handle(string $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}