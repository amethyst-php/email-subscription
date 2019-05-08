<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class EmailSubscriptionAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'email-subscription.create',
        Tokens::PERMISSION_UPDATE => 'email-subscription.update',
        Tokens::PERMISSION_SHOW   => 'email-subscription.show',
        Tokens::PERMISSION_REMOVE => 'email-subscription.remove',
    ];
}
