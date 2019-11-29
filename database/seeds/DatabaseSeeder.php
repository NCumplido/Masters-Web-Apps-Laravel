<?php

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
        // Note: Careful with the order of these, they reference each other (one to many etc).
        $this->call(UserTableSeeder::class);
        $this->call(BlogpostTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
