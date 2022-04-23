<?php

use App\Model\Product;
use App\Model\Review;
use Illuminate\Database\Seeder;

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
        factory(App\User::class, 5)->create();
        $this->call(ProductSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
