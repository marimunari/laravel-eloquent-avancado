<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Product;

class ProductsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        factory(Product::class)->create();
        $data = Product::findOrFail(1);
        //$data = \DB::table('products')->first();
        //$this->assertDatabaseHas('products', (array)$data);
        $this->assertDatabaseHas('products', $data->toArray());
        //$this->assertDatabaseMissing('products', $data->toArray());
        //$this->assertDatabaseSoftDelete('products', $data->toArray());
    }
}
