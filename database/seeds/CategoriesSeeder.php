<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class,10)->create(); //here factory will loop over 10 times and parallely goes to Models\Catagory
    }
}
