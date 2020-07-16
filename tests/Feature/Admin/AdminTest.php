<?php

namespace Tests\Feature\Admin;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
   use RefreshDatabase; //Refrescando la base de datos en cada ejecucion de prueba
    /**
     * A basic feature test example.
     *
     * @test
     */

     public function test_is_admin_can_enter_here()
     {
         $admin = factory(User::class)->create([
             'admin' => true
         ]);

        $this->actingAs($admin)
            ->get(route('products.index'))
            ->assertStatus(200);
     }

     public function test_is_not_admin_cant_enter_here()
     {
        $user = factory(User::class)->create([
            'admin' => false
        ]);

       $this->actingAs($user)
           ->get(route('products.index'))
           ->assertStatus(403);
     }

     public function test_is_not_login_cant_enter_here()
     {
       
       $this
           ->get(route('products.index'))
           ->assertStatus(302);
     }
  
}
