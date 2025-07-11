<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use illuminate\Support\Facades\Blade;

class InlineTest extends TestCase
{
    public function InlineTest()
    {
        $response = Blade::render('Hello {{$name}}', ['name' => 'Eko']);
        self::assertEquals("Hello Eko", $response);
    }
}
