<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function issetEmptyTest()
    {
        $this->view("issetempty", [])->assertDontSeeText("Hello")->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", ["name" => "Juby"])->assertSeeText("Hello, my name is Juby")->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", ["name" => "Juby", "hobbies" => ["Coding"]])->assertSeeText("Hello, my name is Juby")->assertDontSeeText("I don't have any hobbies.", false);
    }
}
