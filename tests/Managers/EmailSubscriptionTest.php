<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\EmailSubscriptionFaker;
use Railken\Amethyst\Managers\EmailSubscriptionManager;
use Railken\Amethyst\Tests\BaseTest;
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
