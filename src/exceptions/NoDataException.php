<?php

/**
 * Class NoDataException
 * An exception to be thrown when the payload submitted is valid, but some data needed to process it doens't exist
 * For example if we POST to the talk/speakers endpoint with a valid request, 
 * but the speaker we want to link to doesn't exist
 * A 404 wouldn't be applicable, as the talk does exist, and the payload syntax is valid, but the display_name isn't
 */
class NoDataException extends Exception
{
    protected $code = 422;

}