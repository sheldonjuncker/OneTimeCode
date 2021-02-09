<?php

namespace jundar\WebTools\OneTimeCodeTest;

use PHPUnit\Framework\TestCase;
use jundar\WebTools\OneTimeCode\OneTimeCode;

class OneTimeCodeUnitTest extends TestCase
{
	public function testRandomCode()
	{
		$code = new OneTimeCode();
		$this->assertIsString($code->generate());
	}
}