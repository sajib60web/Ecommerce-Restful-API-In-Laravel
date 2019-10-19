<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,5)->create();
        factory(App\Models\Product::class,50)->create();
        factory(App\Models\Review::class,300)->create();
    }
}
