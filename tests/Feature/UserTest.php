<?php

use App\Models\User;

test('users can be created', function () {
    $user = User::factory()->create([
        'name' => 'John Doe',
        'email' => 'john@example.com'
    ]);
    $this->assertDatabaseHas('users', [
        'email' => 'john@example.com',
    ]);
});

test('admin panel is accessible', function (){
    $response = $this->get('/admin/login');
    $response->assertStatus(200);
});
