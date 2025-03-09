<?php

use App\Models\Employee;
use App\Models\JobType;
use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;


uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');


/* Create Employee */
test('it creates an employee and gets a 201 status', function () {
    $jobType = JobType::factory()->create();
    $location = Location::factory()->create();

    $uniqueEmail = 'alan@mail.com';
    $phoneNUmber = '555-111-222-33';

    $response = $this->postJson('/employees', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => $uniqueEmail,
        'phone_number' => $phoneNUmber,
        'jobType_id' => $jobType->id,
        'hired_date' => now()->toDateString(),
        'location_id' => $location->id
    ]);

    $response->assertStatus(201);
    $response->assertJson([
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => $uniqueEmail,
        'phone_number' => $phoneNUmber,
        'jobType_id' => $jobType->id,
        'hired_date' => now()->toDateString(),
        'location_id' => $location->id
    ]);

    $this->assertDatabaseHas('employees', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => $uniqueEmail,
        'phone_number' => $phoneNUmber,
        'jobType_id' => $jobType->id,
        'hired_date' => now()->toDateString(),
        'location_id' => $location->id
    ]);
});

/* Read Employee */
test('it retrieves an employee', function () {
    $employee = Employee::factory()->create();

    $response = $this->getJson("/employees/{$employee->id}");

    $response->assertStatus(200);
    $response->assertJson([
        'id' => $employee->id,
        'first_name' => $employee->first_name,
        'last_name' => $employee->last_name,
        'email' => $employee->email,
        'phone_number' => $employee->phone_number,
        'jobType_id' => $employee->jobType_id,
        'hired_date' => $employee->hired_date,
        'location_id' => $employee->location_id
    ]);
});

/* Update Employee */
test('it updates an employee', function () {
    $employee = Employee::factory()->create();

    $updatedPhoneNumber = '999-777-888-77';
    $updatedMail = 'alan2@mail.com';

    $response = $this->patchJson("/employees/{$employee->id}", [
        'first_name' => 'Updated John',
        'last_name' => 'Updated Doe',
        'email' => $updatedMail,
        'phone_number' =>  $updatedPhoneNumber,
        'jobType_id' => $employee->jobType_id,
        'hired_date' => now()->toDateString(),
        'location_id' => $employee->location_id
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'id' => $employee->id,
        'first_name' => 'Updated John',
        'last_name' => 'Updated Doe',
        'email' => $updatedMail,
        'phone_number' =>  $updatedPhoneNumber,
        'jobType_id' => $employee->jobType_id,
        'hired_date' => now()->toDateString(),
        'location_id' => $employee->location_id
    ]);

    $this->assertDatabaseHas('employees', [
        'id' => $employee->id,
        'first_name' => 'Updated John',
        'last_name' => 'Updated Doe',
        'email' => $updatedMail,
        'phone_number' => $updatedPhoneNumber,
        'jobType_id' => $employee->jobType_id,
        'hired_date' => now()->toDateString(),
        'location_id' => $employee->location_id
    ]);
});

/* Delete Employee */
test('it deletes an employee', function () {
    $employee = Employee::factory()->create();

    $response = $this->deleteJson("/employees/{$employee->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('employees', [
        'id' => $employee->id
    ]);
});

