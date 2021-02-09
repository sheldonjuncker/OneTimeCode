<?php

namespace jundar\WebTools\OneTimeCode\GenStrategy;

interface Strategy
{
	public function getCode(int $length): string;
}