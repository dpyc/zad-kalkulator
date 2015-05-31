<?php

namespace spec\dpyc\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ObjetoscprostopadloscianuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\Objetoscprostopadloscianu');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(2)->getB()->shouldReturn(2);
        $this->setH(2)->getH()->shouldReturn(2);
    }
    function it_should_calculate_objetosc()
	{
	    $this->setA(2)->setB(2)->setH(2)->objetosc()->shouldReturn(8);
	}
}
