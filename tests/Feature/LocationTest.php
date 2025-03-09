<?php

use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

test("it creates a new location", function () {
    //create a location using factory
    $location = Location::factory()->create([
        'city' => 'Cartagena',
        'address' => 'Bocagrande av 123'
    ]);

    //assert that location exist in the database
    $this->assertDatabaseHas('locations', [
        'city' => 'Cartagena',
        'address' => 'Bocagrande av 123'
    ]);

    //assert that location has the correct atributes
    expect($location->city)->toBe('Cartagena')
        ->and($location->address)->toBe('Bocagrande av 123');
});


test('it retrieves a location', function () {
    //create a location using factory
    $location = Location::factory()->create([
        'city' => 'Cartagena',
        'address' => 'Bocagrande av 123'
    ]);

    //retrieve location object
    $retrivedLocation = Location::find($location->id);

    //assert and check that the retrieved location match the original
    expect($retrivedLocation->city)->toBe($location->city)
        ->and($retrivedLocation->address)->toBe($location->address);
});

test("it updates a location", function () {
    //create a locaton using factory
    $location = Location::factory()->create();

    //update the location's details
    $location->update([
        'city' => 'Barranquilla',
        'address' => 'el prado 123'
    ]);

    //assert if the location was updated in database
    $this->assertDatabaseHas('locations', [
        'id' => $location->id,
        'city' => 'Barranquilla',
        'address' => "el prado 123"
    ]);

    //Refresh the location instance and assert the changes
    $freshLocation = $location->fresh();
    expect($freshLocation->city)->toBe("Barranquilla")
        ->and($freshLocation->address)->toBe('el prado 123');
});

test('it deletes a location', function () {
    //create a location using factory
    $location = Location::factory()->create();

    //Delete location object
    $location->delete();

    //Assert that the customerno longer exist in database
    $this->assertDatabaseMissing('locations', [
        'id' => $location->id
    ]);
});
