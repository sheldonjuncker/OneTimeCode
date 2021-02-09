<?php


namespace jundar\WebTools\OneTimeCode\GenStrategy;


class RandomStrategy implements Strategy
{
	public function getCode(int $length): string
	{
		$code = '';
		for($i=0; $i<$length; $i++) {
			$code .= random_int(0, 9);
		}
		return $code;
	}
}