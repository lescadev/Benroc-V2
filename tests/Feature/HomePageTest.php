<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *@test
     * @return void
     */
    public function HomePage()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);

        $response->assertSuccessful();
        
    }
}
