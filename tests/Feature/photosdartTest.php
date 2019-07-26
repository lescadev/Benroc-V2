<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class photosdart extends TestCase
{
    /**
     * A basic feature test example.
     *@test
     * @return void
     */
    public function Photosdart()
    {
        $response = $this->get('/photodart');

        $response->assertStatus(200);
        
        $response->assertSuccessful();
    }
}
