<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testParentchild extends TestCase
{
    public function testInheritance()
    {
        $this->view("childparent", [])->assertSeeText("Nama Aplikasi - Halaman Utama")->assertSeeText("Deskripsi Header")->assertSeeText("Default Header")->assertSeeText("Default Content")->assertSeeText("Ini adalah halaman utama");
    }
    public function testInheritanceWithoutOverride()
    {
        $this->view("childparent", [])->assertSeeText("Nama Aplikasi - Halaman Utama")->assertSeeText("Default Header")->assertSeeText("Default Content")->assertDontSeeText("Deskripsi Header")->assertDontSeeText("Ini adalah halaman utama");
    }
}
