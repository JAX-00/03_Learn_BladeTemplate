<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariabell extends TestCase
{
    public function testLoopVariable()
    {
        $this->view("whileLoop", ["hobbies" => ["Coding", "Gaming"]])->assertSeeText("1. Coding")->assertSeeText("2. Gaming");
    }
}
