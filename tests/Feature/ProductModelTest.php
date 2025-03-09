<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Feature');

test('it create a product inside database', function () {
    $category = Category::factory()->create();

    //create a product using factory
    $product = Product::factory()->create([
        'product_name' => 'Asus ryzen 7 ',
        'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
        'qty_stock'=> 10,
        'price' => 800.00
    ]);


     $this->assertDatabaseHas('products', [
         'product_name' => $product->product_name,
         'description' => $product->description,
         'qty_stock'=> $product->qty_stock,
         'price' => $product->price,
     ]);
});

test('it creates a product via HTTP POST request', function () {
    $category = Category::factory()->create();

    $response = $this->postJson('/products', [
        'product_name' => 'Asus ryzen 7 ',
        'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
        'qty_stock'=> 10,
        'price' => 800.00,
       // 'category_id' => $category->id,
    ]);

    //assert the respponse status and structure
    $response->assertStatus(201)
        ->assertJson([
            'product_name' => 'Asus ryzen 7 ',
            'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
            'qty_stock'=> 10,
            'price' => 800.00
        ]);
});


test('it read product from database', function () {
    //create a product using factory
    $product = Product::factory()->create([
        'product_name' => 'Asus ryzen 7 ',
        'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
        'qty_stock'=> 10,
        'price' => 800.00
    ]);

    $retrievedProduct = Product::find($product->id);

    expect($retrievedProduct->product_name)->toBe($product->product_name)
        ->and($retrievedProduct->description)->toBe($product->description)
        ->and((integer)$retrievedProduct->qty_stock)->toBe((integer)$product->qty_stock)
        ->and((float)$retrievedProduct->price)->toBe((float)$product->price);
});

test('it updates a product into the database', function () {
    //create a product using factory
    $product = Product::factory()->create([
        'product_name' => 'Asus ryzen 7 ',
        'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
        'qty_stock'=> 10,
        'price' => 800.00
    ]);

    $product->update([
        'product_name' => 'Asus ryzen 9 ',
        'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
        'qty_stock'=> 20,
        'price' => 1200.00
    ]);

    $freshProduct = $product->fresh();

    $this->assertDatabaseHas('products', [
        'product_name' => $freshProduct->product_name,
        'description' => $freshProduct->description,
        'qty_stock'=> $freshProduct->qty_stock,
        'price' => $freshProduct->price,
    ]);

}) ;

test('it delete or destroy a product data from database', function () {
    //create a product using factory
    $product = Product::factory()->create([
        'product_name' => 'Asus ryzen 7 ',
        'description' => 'nvidia rx4010h, ram 16gd ssd 1t',
        'qty_stock'=> 10,
        'price' => 800.00
    ]);

    $product->delete();
    $this->assertDatabaseMissing('products', [
        'id' => $product->id,
    ]);
});
