<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestRawPHP extends TestCase
{
    public function testRawPHP()
    {
        $this->view("raw", [])->assertSeeText("Eko")->assertSeeText("Indonesia");
    }
}
