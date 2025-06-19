<?php

namespace Tests\Feature\Loja;

use App\Models\Loja;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class ShowLojaTest extends TestCase
{

    use RefreshDatabase;

    public function test_show_loja(): void
    {
        $user = User::factory()->create();

        $loja = Loja::factory()->create([
            'user_id' => $user->id,
        ]);

        $this->actingAs($user);

        $response = $this->get('/lojas/' . $loja->slug)
            ->assertInertia(
                fn(Assert $page) => $page
                    ->component('lojas/Show')
                    ->has(
                        'loja',
                        fn(Assert $page) => $page
                            ->where('id', $loja->id)
                            ->where('nome', $loja->nome)
                            ->etc()
                    )
            );

        $response->assertStatus(200);
    }
}
