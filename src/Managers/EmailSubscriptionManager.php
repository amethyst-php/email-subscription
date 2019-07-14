<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\EmailSubscription                 newEntity()
 * @method \Amethyst\Schemas\EmailSubscriptionSchema          getSchema()
 * @method \Amethyst\Repositories\EmailSubscriptionRepository getRepository()
 * @method \Amethyst\Serializers\EmailSubscriptionSerializer  getSerializer()
 * @method \Amethyst\Validators\EmailSubscriptionValidator    getValidator()
 * @method \Amethyst\Authorizers\EmailSubscriptionAuthorizer  getAuthorizer()
 */
class EmailSubscriptionManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.email-subscription.data.email-subscription';
}
