<?php

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

test('it create a category object', function () {
    $category = Category::factory()->create([
        'name' => 'MacBook Pro Chip M4',
        'description' => 'last product fo apple computing system, very powerful',
    ]);

    $this->assertDatabaseHas('categories', [
        'name' => $category->name,
        'description' => $category->description,
    ]);

//    expect($category->name)->toBe('MacBook Pro Chip M4')
//        ->and($category->description)->toBe('last product fo apple computing system, very powerful');
});

test('it read a Category from data base', function () {
    //create a Category object using factory
    $category = Category::factory()->create([
        'name' => 'MacBook Pro Chip M4',
        'description' => 'last product fo apple computing system, very powerful',
    ]);


    $retrievedCategory = Category::find($category->id);

    expect($retrievedCategory->name)->toBe($category->name)
        ->and($retrievedCategory->description)->toBe($category->description);



});


test('it update a Category object', function () {
    //create a category
    $category = Category::factory()->create([
        'name' => 'MacBook Pro Chip M4',
        'description' => 'last product fo apple computing system, very powerful',
    ]);

    $category->update([
        'name' => 'MacBook Pro Chip M2',
        'description' => "Last Apple's product computing system, very powerful",
    ]);

    $refreshCategory = $category->fresh();

    $this->assertDatabaseHas('categories',[
        'name' => $refreshCategory->name,
        'description' => $refreshCategory->description,
    ]);

});

test('it destroy a category object', function () {
    //create a category object
    $category = Category::factory()->create();

    $category->delete();

    $this->assertDatabaseMissing('categories', [
        'id' => $category->id,
    ]);
});

