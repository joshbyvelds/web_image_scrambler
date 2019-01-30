<?php

namespace spec\ImageScrambler;

use ImageScrambler\Image;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImageSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Image::class);
    }
}
