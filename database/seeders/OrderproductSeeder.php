<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::inRandomOrder()->take(5)->get();
        foreach ($orders as $order) {
            $no_of_products = fake()->numberBetween(1, 5);
            $products = Product::inRandomOrder()->take($no_of_products)->get(); {
                foreach ($products as $product) {
                    $order->products()->attach($product);
                }
            }
        }
    }
}
