<?php

namespace spec\SmartGamma\Behat\PactExtension\Infrastructure\Interaction;

use SmartGamma\Behat\PactExtension\Infrastructure\Interaction\InteractionResponseDTO;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InteractionResponseDTOSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(200, []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InteractionResponseDTO::class);
    }
}
