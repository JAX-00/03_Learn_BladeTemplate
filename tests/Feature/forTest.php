<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class forTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function ForTest()
    {
        $this->view("for", ["limit" => 3])->assertSeeText("0")->assertSeeText("1")->assertSeeText("2");
    }

    public function ForEachTest()
    {
        $this->view("foreach", ["hobbies" => ["Coding", "Gaming"]])->assertSeeText("Coding")->assertSeeText("Gaming");
    }

    public function testForEach()
    {

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])->assertSeeText("Coding")->assertSeeText("Gaming")->assertDontSeeText("Tidak Punya Hobby");

        $this->view("forelse", ["hobbies" => []])->assertDontSeeText("Coding")->assertDontSeeText("Gaming")->assertSeeText("Tidak Punya Hobby");
    }
}
