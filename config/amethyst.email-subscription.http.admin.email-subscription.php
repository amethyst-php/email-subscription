<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\EmailSubscriptionsController::class,
    'router'     => [
        'as'     => 'email-subscription.',
        'prefix' => '/email-subscriptions',
    ],
];
