<?php

/**
 * Class NotFoundException
 * An exception to be thrown when the request resource doesn't exist
 */
class NotFoundException extends Exception
{
    protected $code = 404;

}