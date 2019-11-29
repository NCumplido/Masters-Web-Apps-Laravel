<?php

use Illuminate\Database\Seeder;
use App\BlogPost;

class BlogpostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BlogPost::class, 50)->create();
    }
}
