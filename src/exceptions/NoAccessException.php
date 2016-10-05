<?php

/**
 * Class NoAccessException
 * An exception to be thrown when a user is logged in, but doesn't have access to the requested endpoint
 */
class NoAccessException extends Exception
{
    protected $code = 403;

}