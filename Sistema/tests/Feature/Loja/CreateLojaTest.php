<?php

namespace Tests\Feature\Loja;

use App\Models\Loja;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateLojaTest extends TestCase
{
    use RefreshDatabase;

    public function test_navegate_page_create_loja(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/lojas/create');

        $response->assertSuccessful();
    }

    public function test_create_loja(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/lojas', [
            'nome' => 'Loja Teste',
            'contato' => '123456789',
            'logo' => null,
        ])->assertRedirect(route('lojas.show', 'loja-teste'));

        $this->assertDatabaseHas('lojas', [
            'nome' => 'Loja Teste',
            'contato' => '123456789',
        ]);
    }

    public function test_create_loja_with_logo(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/lojas', [
            'nome' => 'Loja Teste',
            'contato' => '123456789',
            'logo' => \Illuminate\Http\UploadedFile::fake()->image('logo.jpg'),
        ])->assertRedirect(route('lojas.show', 'loja-teste'));

        $this->assertDatabaseHas('lojas', [
            'nome' => 'Loja Teste',
            'contato' => '123456789',
        ]);
    }

    public function test_create_loja_validation(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/lojas', [
            'nome' => '',
            'contato' => '',
            'logo' => null,
        ]);

        $response->assertSessionHasErrors(['nome', 'contato']);

        Loja::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->post('/lojas', [
            'nome' => 'wwww',
            'contato' => '1231',
            'logo' => null,
        ])->assertRedirect(route('dashboard'));


    }
}
