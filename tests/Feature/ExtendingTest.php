<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingTest extends TestCase
{
    public function testExtending()
    {
        $this->view("extentding", ["name" => "Eko"])->assertSeeText("Hello Eko");
    }
}
