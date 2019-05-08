<?php

namespace Railken\Amethyst\Http\Controllers\Admin;

use Railken\Amethyst\Api\Http\Controllers\RestManagerController;
use Railken\Amethyst\Api\Http\Controllers\Traits as RestTraits;
use Railken\Amethyst\Managers\EmailSubscriptionManager;

class EmailSubscriptionsController extends RestManagerController
{
    use RestTraits\RestCommonTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = EmailSubscriptionManager::class;
}
