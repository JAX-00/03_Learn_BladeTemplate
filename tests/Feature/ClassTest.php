<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function classTest()
    {
        $this->view("class", ["hobbies" => [
            [
                "name" => "Coding",
                "Love" => true
            ],
            [
                "name" => "Gaming",
                "Love" => false
            ]
        ]])->assertSee('<li class="red bold">Coding</li>', false)->assertSee('<li class="red">Gaming</li>', false);
    }
}
