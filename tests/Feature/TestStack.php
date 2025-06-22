<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestStack extends TestCase
{
    public function testStact()
    {
        $this->view("stack", [])->assertSeeInOrder(["third.js", "first.js", "second.js"]);
    }
}
