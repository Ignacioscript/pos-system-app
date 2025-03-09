<?php

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

test('it creates a customer and gets a 201 status', function () {
    //create a customer
    $customer = Customer::factory()->create([
        'first_name' => 'Alan',
        'last_name' => 'Harper',
        'phone_number' => '555-123-13',
        'email' => 'alan3@mail.com',
    ]);

    $response = $this->postJson("customers", [
        'first_name' => $customer->first_name,
        'last_name' => $customer->last_name,
        'phone_number' => $customer->phone_number,
        'email' => $customer->email,
    ]);

    $response->assertStatus(201)
        ->assertJson([
            'first_name' => $customer->first_name,
            'last_name' => $customer->last_name,
            'phone_number' => $customer->phone_number,
            'email' => $customer->email,
        ]);

    $this->assertDatabaseHas("customers", [
        'first_name' => $customer->first_name,
        'last_name' => $customer->last_name,
        'phone_number' => $customer->phone_number,
        'email' => $customer->email,
    ]);

});

test('it retrieves a customer and gets a 200 status', function () {
    $customer = Customer::factory()->create();

    $response = $this->getJson("/customers/{$customer->id}");

    $response->assertStatus(200)
        ->assertJson([
            'id' => $customer->id,
            'email' => $customer->email,
        ]);
} );

test('it updates a customer and gets a 200 status', function () {
    $customer = Customer::factory()->create();


    $response = $this->patchJson("/customers/{$customer->id}", [
        'first_name' => $customer->first_name,
        'last_name' => $customer->last_name,
        'phone_number' => $customer->phone_number,
        'email' => $customer->email,
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'first_name' => $customer->first_name,
            'last_name' => $customer->last_name,
            'phone_number' => $customer->phone_number,
            'email' => $customer->email,
        ]);

    $this->assertDatabaseHas("customers", [
        'first_name' => $customer->first_name,
        'last_name' => $customer->last_name,
        'phone_number' => $customer->phone_number,
        'email' => $customer->email,
    ]);
});

test('it deletes a customer and gets a 204 status', function () {
    $customer = Customer::factory()->create();

    $response = $this->deleteJson("/customers/{$customer->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing("customers", [
        'id' => $customer->id
        ]);
});
