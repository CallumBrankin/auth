<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace SocialConnect\OAuth2\Exception;

class InvalidState extends \SocialConnect\Common\Exception
{
    public function __construct($message = 'Invalid state')
    {
        parent::__construct($message);
    }
}
