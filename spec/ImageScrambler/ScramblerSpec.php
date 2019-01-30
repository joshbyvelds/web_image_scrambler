<?php

namespace spec\ImageScrambler;

use ImageScrambler\Scrambler;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ScramblerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Scrambler::class);
    }
}
