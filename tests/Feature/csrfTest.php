<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class csrfTest extends TestCase
{
    public function testCSRF()
    {
        $this->view("CSRF", [])->assertSee("hidden")->assertSee("_token");
    }
}
