<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\EmailSubscriptionFaker;
use Amethyst\Managers\EmailSubscriptionManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class EmailSubscriptionTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = EmailSubscriptionManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = EmailSubscriptionFaker::class;
}
