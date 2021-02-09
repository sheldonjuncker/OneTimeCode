<?php

namespace jundar\WebTools\OneTimeCode;

use http\Exception\InvalidArgumentException;
use jundar\WebTools\OneTimeCode\GenStrategy\ReadableStrategy;
use jundar\WebTools\OneTimeCode\GenStrategy\Strategy;

/**
 * Class OneTimeCode
 *
 * Representation of a one time code.
 */
class OneTimeCode
{
	/** @var int $length The desired length of the code */
	protected $length;

	/** @var Strategy $genStrategy The desired generation strategy to use */
	protected $genStrategy;

	/**
	 * @return Strategy
	 */
	public function getGenStrategy(): Strategy
	{
		return $this->genStrategy ?? $this->getDefaultGenStrategy();
	}

	/**
	 * @param Strategy $strategy
	 */
	public function setGenStrategy(Strategy $strategy): void
	{
		$this->genStrategy = $strategy;
	}

	public function getLength(): int
	{
		return $this->length ?? $this->getDefaultLength();
	}

	/**
	 * Sets the code length.
	 *
	 * @param int $length
	 * @throws \InvalidArgumentException
	 */
	public function setLength(int $length): void
	{
		if($length <= 0) {
			throw new InvalidArgumentException('The code length must be greater than zero.');
		}
		$this->length = $length;
	}

	/**
	 * Gets the code.
	 *
	 * @return string
	 */
	public function generate(): string
	{
		return $this->getGenStrategy()->getCode();
	}

	/**
	 * By default, we'll use the human readable strategy.
	 *
	 * @return Strategy
	 */
	protected function getDefaultGenStrategy(): Strategy
	{
		return new ReadableStrategy();
	}

	/**
	 * By default we'll use 6 as our code length.
	 *
	 * @return int
	 */
	protected function getDefaultLength(): int
	{
		return 6;
	}
}