<?php

namespace Php\Testing\Functions\Strings;

use function cli\line;
use function cli\prompt;
use Funct\Strings;

function run(): void
{
    $string = prompt('Hello! Enter string to trim');
    $result = Strings\toLower(trim(removeDoubleSpaces($string)));
    line("Result: '{$result}'");
}

function removeDoubleSpaces(string $string): string
{
    while (str_contains($string, '  ')) {
        $string = str_replace('  ', ' ', $string);
    }
    return $string;
}
