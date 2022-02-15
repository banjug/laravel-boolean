<?php

use App\Postcard;
use Illuminate\Database\Seeder;

class PostcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Postcard::class, 20)->create();
    }
}
