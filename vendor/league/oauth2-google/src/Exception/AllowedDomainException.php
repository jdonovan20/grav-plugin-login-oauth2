<?php

namespace League\OAuth2\Client\Exception;

/**
 * Exception thrown if the user doesn't belong to a defined domain by the GravCMS administrator
 */
class AllowedDomainException extends \Exception
{

    public static function notMatchingDomain($customError = "")
    {
        if ($customError != "") {
            return new static($customError);
        }
        else
        {
            return new static("User is not part of any allowed domains");
        }   
    }
}