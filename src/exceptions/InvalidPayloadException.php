<?php

/**
 * Class InvalidPayloadException
 * An exception to be thrown when the payload submitted is incorrect (e.g. missing data)
 */
class InvalidPayloadException extends Exception
{
    protected $code = 400;

}