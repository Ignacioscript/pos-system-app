<?php

use App\Models\Location;
use App\Models\Supplier;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

test('it creates a supplier', function () {
    //create a supplier using factory
    $location = Location::factory()->create();
    $supplier = Supplier::factory()->create([
        'location_id' => $location->id
    ]);



    //assert if supplier exist in database
    $this->assertDatabaseHas('suppliers', [
        'location_id' => $location->id,
        'company_name' => $supplier->company_name,
        'phone_number' => $supplier->phone_number
    ]);

    expect($supplier->location_id)->toBe($location->id)
        ->and($supplier->company_name)->toBe($supplier->company_name)
        ->and($supplier->phone_number)->toBe($supplier->phone_number);
});




test('it retrieves an supplier object', function () {
    //creates a supplier using factory
//    $location = Location::factory()->create();
    $supplier = Supplier::factory()->create();

    $retrievedSupplier = Supplier::find($supplier->id);

    expect($retrievedSupplier->location_id)->toBe($supplier->location_id)
        ->and($retrievedSupplier->company_name)->toBe($supplier->company_name)
        ->and($retrievedSupplier->phone_number)->toBe($supplier->phone_number);


});



test('it updates a supplier', function () {
    //creates a supplier using a factory
    $supplier = Supplier::factory()->create();

    $supplier->update([
        'company_name' => 'updated_company_name',
        'phone_number' => 'updated_phone_number'
    ]);

    $this->assertDatabaseHas('suppliers', [
        'id' => $supplier->id,
        'company_name' => 'updated_company_name',
        'phone_number' => 'updated_phone_number',
    ]);

    $refreshSupplier = $supplier->fresh();

    expect($refreshSupplier->company_name)->toBe('updated_company_name')
        ->and($refreshSupplier->phone_number)->toBe('updated_phone_number');

});

test('it destroy a Supplier object by id', function () {
    //creates a supplier object
    $supplier = Supplier::factory()->create();

    //delete using method
    $supplier->delete();

    $this->assertDatabaseMissing('suppliers', [
        'id' => $supplier->id,
    ]);
});


