<?php

namespace Tests\Unit;

use App\Parsers\FileParser;
use PHPUnit\Framework\TestCase;

class FileParserTest extends TestCase
{
    public function testItWorks()
    {
        $parser = new FileParser();
        $parser->parse();
    }
}
