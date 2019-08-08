<?php

namespace Tests;

use ArrayKeysCaseTransform\ArrayKeys;
use ArrayKeysCaseTransform\Transformer\AbstractTransformer;
use PHPUnit\Framework\TestCase;

class ArrayKeysTest extends TestCase
{

    public function testToSnakeCaseCallShouldWork() : void
    {
        $this->assertSame([], ArrayKeys::toSnakeCase([]));
    }

    public function testToCamelCaseCallShouldWork() : void
    {
        $this->assertSame([], ArrayKeys::toCamelCase([]));
    }

    public function testTransformCallShouldWork() : void
    {
        $converter = new class extends AbstractTransformer {
            protected function format(string $key): string
            {
                return $key;
            }
        };

        $this->assertSame([], ArrayKeys::transform($converter, []));
    }
}
