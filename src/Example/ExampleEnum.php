<?php

namespace Sagar290\PhpTraits\Example;

use Sagar290\PhpTraits\Traits\EnumTraits;

enum ExampleEnum: string
{
    use EnumTraits;

    case EXAMPLE = 'example';

}