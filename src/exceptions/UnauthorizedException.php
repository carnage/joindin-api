<?php

/**
 * Class UnauthorizedException
 * An exception to be thrown when a non-logged in user
 * tries to perform an action they need to be logged in for
 */
class UnauthorizedException extends Exception
{
    protected $code = 401;

}