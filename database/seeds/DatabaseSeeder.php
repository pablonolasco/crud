<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Category::class,10)->create();
        factory(Product::class,100)->create();


    }
}
