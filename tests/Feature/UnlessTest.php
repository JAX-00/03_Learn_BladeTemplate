<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function unlessTest()
    {
        $this->view("unless", ["isAdmin" => true])->assertDontSeeText("You are not admin.");

        $this->view("unless", ["isAdmin" => false])->assertSeeText("You are not admin.");
    }
}
