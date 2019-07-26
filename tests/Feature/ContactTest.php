<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *@test
     * @return void
     */
    public function Contact()
    {
        $response = $this->get('/contactez-moi');

        $response->assertStatus(200);
        
        $response->assertSuccessful();
    }
}
