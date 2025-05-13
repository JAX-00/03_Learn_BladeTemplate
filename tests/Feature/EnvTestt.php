<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvTestt extends TestCase
{
    public function EnvTest()
    {
        $this->view("env", [])->assertSeeText("This is test environment.");
    }
}
