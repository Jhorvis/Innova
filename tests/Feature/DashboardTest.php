<?php

namespace Tests\Feature;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    use RefreshDatabase; //Refrescando la base de datos en cada ejecucion de prueba
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_the_page_create_orders_for_users_authenticated()
    {
        $user = factory (User::class)->create();
        $this->actingAs($user)
            ->get(route('order.index'))
            ->assertStatus(200);
    }

    public function test_user_not_authenticated_show_page()
    {
        $user = factory (User::class)->create();
        $this
            ->get(route('order.index'))
            ->assertStatus(302);
    }
}
