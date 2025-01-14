<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use App\Models\Review;
use App\Models\Customer;

class ProductTest extends TestCase
{
    /**
     * Get average rating
     */
    public function test_get_average_rating(): void
    {
        $product = Product::factory()->create();
        $customer = Customer::factory()->create();
        Review::factory()->create(['product_id' => $product->id, 'customer_id' => $customer->id, 'rating' => 5]);
        Review::factory()->create(['product_id' => $product->id, 'customer_id' => $customer->id, 'rating' => 3]);
        Review::factory()->create(['product_id' => $product->id, 'customer_id' => $customer->id, 'rating' => 4]);

        $this->assertEquals(4, $product->getAverageRating());
    }
}
