<?php

return [
    'table'      => 'amethyst_email_subscriptions',
    'comment'    => 'EmailSubscription',
    'model'      => Railken\Amethyst\Models\EmailSubscription::class,
    'schema'     => Railken\Amethyst\Schemas\EmailSubscriptionSchema::class,
    'repository' => Railken\Amethyst\Repositories\EmailSubscriptionRepository::class,
    'serializer' => Railken\Amethyst\Serializers\EmailSubscriptionSerializer::class,
    'validator'  => Railken\Amethyst\Validators\EmailSubscriptionValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\EmailSubscriptionAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\EmailSubscriptionFaker::class,
    'manager'    => Railken\Amethyst\Managers\EmailSubscriptionManager::class,
];
