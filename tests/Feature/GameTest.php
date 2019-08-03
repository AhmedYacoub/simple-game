<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GameTest extends TestCase
{
   /** @test */
   public function user_can_read_rules() {
       $this->get('/')
            ->assertStatus(200);
   }

   /** @test */
   public function user_can_play_game() {
       $this->get('/game/play')
            ->assertStatus(200);
   }

   /** @text */
   public function user_can_view_results() {
       $this->post('/game/results')
            ->assertStatus(200);
   }
}
