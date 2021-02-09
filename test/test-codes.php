<?php

use jundar\WebTools\OneTimeCode\GenStrategy\RandomStrategy;
use jundar\WebTools\OneTimeCode\GenStrategy\ReadableStrategy;
use jundar\WebTools\OneTimeCode\OneTimeCode;

require_once __DIR__ . '/../vendor/autoload.php';

print "Generating codes...\n\n";

$code = new OneTimeCode();
$code->setGenStrategy(new ReadableStrategy());
print "Human readable code: " . $code->generate() . "\n";

$code = new OneTimeCode();
$code->setGenStrategy(new RandomStrategy());
print "Random code: " . $code->generate() . "\n";

print "\nFinished!\n";