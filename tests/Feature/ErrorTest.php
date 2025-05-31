<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testValidation()
    {
        $errors = [
            "name" => "Name is Required",
            "password" => "Password is required"
        ];

        $this->withViewErrors($errors)->view("ERROR", [])->assertSeeText("Name is required")->assertSeeText("Password iis required");
    }
}
