<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class swichTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function SwitchTest()
    {
        $this->view("switch", ["value" => "A"])->assertSeeText("Memuaskan");

        $this->view("switch", ["value" => "B"])->assertSeeText("Bagus");

        $this->view("switch", ["value" => "C"])->assertSeeText("Cukup");

        $this->view("switch", ["value" => "D"])->assertSeeText("Tidak Lulus");
    }
}
