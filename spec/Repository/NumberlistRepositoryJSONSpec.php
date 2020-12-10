<?php

namespace spec\Repository;

use PhpSpec\ObjectBehavior;
use Repository\NumberlistRepositoryJSON;

class NumberlistRepositoryJSONSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumberlistRepositoryJSON::class);
    }

    function it_has_the_correct_anount_of_numbers()
    {
        $this->getNumbers()->shouldHaveCount(200);
    }
}
