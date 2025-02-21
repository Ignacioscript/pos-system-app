<?php

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

/*Create  Customer*/
test('it creates a new customer with specific attributes', function () {
    // Create a customer using a factory with overridden attributes
    $customer = Customer::factory()->create([
        'first_name' => 'Alan',
        'last_name' => 'Harper',
        'phone_number' => '555-123-11-22',
        'email' => 'alan@mail.com'
    ]);

    // Assert that the customer exists in the database
    $this->assertDatabaseHas('customers', [
        'first_name' => 'Alan',
        'last_name' => 'Harper',
        'phone_number' => '555-123-11-22',
        'email' => 'alan@mail.com'
    ]);

    // Assert that the customer object has the correct attributes
    expect($customer->first_name)->toBe('Alan')
        ->and($customer->last_name)->toBe('Harper')
        ->and($customer->phone_number)->toBe('555-123-11-22')
        ->and($customer->email)->toBe('alan@mail.com');
});


/*Read Operation*/
test('it retrieves a customer', function () {
    //create a customer using factory
    $customer = Customer::factory()->create();

    //Retrieve the customer by ID
    $retrievedCustomer = Customer::find($customer->id);

    //Assert that the retrieved customer matches the original
    expect($retrievedCustomer->first_name)->toBe($customer->first_name)
        ->and($retrievedCustomer->last_name)->toBe($customer->last_name)
        ->and($retrievedCustomer->phone_number)->toBe($customer->phone_number)
        ->and($retrievedCustomer->email)->toBe($customer->email);
});


/*Update Operation*/
test('it updates a customer', function (){
    //creates a customer using factory
    $customer = Customer::factory()->create();

    //update the customer details
    $customer->update([
        'first_name' => 'Updated Alan',
        'last_name' => 'Updated Harper',
        'phone_number' => '999-999-99-99',
        'email' => 'updated.alan@mail.com'
    ]);

    //Assert that the customer was updated in the database
    $this->assertDatabaseHas('customers', [
        'id' => $customer->id,
        'first_name' => 'Updated Alan',
        'last_name' => 'Updated Harper',
        'phone_number' => '999-999-99-99',
        'email' => 'updated.alan@mail.com'
    ]);

    //Refresh the customer instance and assert the changes
    $freshCustomer = $customer->fresh();
    expect($freshCustomer->first_name)->toBe("Updated Alan")
        ->and($freshCustomer->last_name)->toBe('Updated Harper')
        ->and($freshCustomer->phone_number)->toBe('999-999-99-99')
        ->and($freshCustomer->email)->toBe('updated.alan@mail.com');

});


/*Delete Operation*/
test('it deletes a customer', function () {
    //creates a customer using factory
    $customer = Customer::factory()->create();

    //delete the customer
    $customer->delete();

    //assert that the customer no longer exist in the database
    $this->assertDatabaseMissing('customers', [
        'id' => $customer->id,
    ]);
});
