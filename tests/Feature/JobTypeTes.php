<?php

use App\Models\JobType;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

test('it creates a Job Type ', function () {
    //create a job type using factory
    $jobtype = JobType::factory()->create();

    //Assert if
    $this->assertDatabaseHas('job_types', [
        'job_title' => $jobtype->job_title,
        'salary' => $jobtype->salary
    ]);

    expect($jobtype->job_title)->toBe($jobtype->job_title)
        ->and($jobtype->salary)->toBe($jobtype->salary);
});


test('it retrieves a job type', function () {
    //create a job type
    $jobType = JobType::factory()->create([
        'job_title' => 'Developer',
        'salary' => 50.0
    ]);

    $retrievedJobType = JobType::find($jobType->id);

    expect($retrievedJobType->job_title)->toBe($jobType->job_title)
        ->and((float)$retrievedJobType->salary)->toBe((float)$jobType->salary);
});

test('it updates a job type', function () {
    //create a job type
    $jobType = JobType::factory()->create();

    $jobType->update([
        'job_title' => 'Analyst',
        'salary' => 79.0
    ]);

    $this->assertDatabaseHas('job_types', [
        'id' => $jobType->id,
        'job_title' => 'Analyst',
        'salary' => 79.0
    ]);

    $freshJobType = $jobType->fresh();
    expect($freshJobType->job_title)->toBe('Analyst')
        ->and((float)$freshJobType->salary)->toBe(79.0);
});

test('it deletes a job type', function () {
    //create a job type
    $jobType = JobType::factory()->create();

    //delete a job type object
    $jobType->delete();

    //assert if the job type was removed from database
    $this->assertDatabaseMissing('job_types', [
        'id' => $jobType->id
    ]);


});
