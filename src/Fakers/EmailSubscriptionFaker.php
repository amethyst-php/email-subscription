<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class EmailSubscriptionFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('business_name', $faker->name);
        $bag->set('list', $faker->name);
        $bag->set('email', $faker->email);

        return $bag;
    }
}
