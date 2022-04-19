<?php

namespace Structure;

/**
 * The Handler interface declares a method for building the chain of handlers.
 * It also declares a method for executing a request.
 */
interface IHandler
{
    public function setNext(IHandler $handler): IHandler;

    public function handle(string $request): ?string;
}