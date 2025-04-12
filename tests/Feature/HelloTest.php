<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")->assertSeeText("Eko");
    }

    public function testWorld()
    {
        $this->get("/world")->assertSeeText("Eko");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "Jubi"])->assertSeeText("Jubi");
    }

    public function testWorldView()
    {
        $this->view("Hello.Worldhelo", ["name" => "Jubi"])->assertSeeText("Jubi");
    }
}
