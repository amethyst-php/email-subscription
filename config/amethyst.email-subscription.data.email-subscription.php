<?php

return [
    'table'      => 'amethyst_email_subscriptions',
    'comment'    => 'EmailSubscription',
    'model'      => Amethyst\Models\EmailSubscription::class,
    'schema'     => Amethyst\Schemas\EmailSubscriptionSchema::class,
    'repository' => Amethyst\Repositories\EmailSubscriptionRepository::class,
    'serializer' => Amethyst\Serializers\EmailSubscriptionSerializer::class,
    'validator'  => Amethyst\Validators\EmailSubscriptionValidator::class,
    'authorizer' => Amethyst\Authorizers\EmailSubscriptionAuthorizer::class,
    'faker'      => Amethyst\Fakers\EmailSubscriptionFaker::class,
    'manager'    => Amethyst\Managers\EmailSubscriptionManager::class,
];
