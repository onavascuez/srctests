<?php

namespace srctests\SharedKernel\Application\UseCase;

class NullRequest implements RequestInterface
{
    public static function equalsTo(RequestInterface $request)
    {
        return $request instanceof self;
    }
}