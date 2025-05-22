<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditationTest extends TestCase
{
    public function IncludeConditation()
    {
        $this->view("include-condition", [
            "user" => [
                "name" => "Eko",
                "owner" => true
            ]
        ])->assertSeeText("Selamat datang owner")->assertSeeText("Selamat datang Eko");

        $this->view("include-condition", [
            "user" => [
                "name" => "Eko",
                "owner" => false
            ]
        ])->assertDontSeeText("Selamat datang owner")->assertSeeText("Selamat datang Eko");
    }
}
