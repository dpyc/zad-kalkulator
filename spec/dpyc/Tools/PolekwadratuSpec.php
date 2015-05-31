<?php

namespace spec\dpyc\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PolekwadratuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\Polekwadratu');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(4)->getA()->shouldReturn(4);
    }
	function it_should_calculate_polekwadratu()
	{
	    $this->setA(4)->polekwadratu()->shouldReturn(16);
	}
}
