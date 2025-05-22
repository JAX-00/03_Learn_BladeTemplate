<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])->assertSeeText("Programer Zaman Now")->assertSeeText("Selamat datang di website kami")->assertSeeText("Selamat datang di Web");

        $this->view("include", ["title" => "Eko"])->assertSeeText("EKo")->assertSeeText("Selamat datang di website kami")->assertSeeText("Selamat datang di Web");
    }
}
