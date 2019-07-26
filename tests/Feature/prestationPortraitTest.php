<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class prestationPortrait extends TestCase
{
    /**
     * A basic feature test example.
     *@test
     * @return void
     */
    public function Portrait()
    {
        $response = $this->get('/prestation/portraits');
        
        $response->assertSuccessful();
    }
}
