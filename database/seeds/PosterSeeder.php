<?php

use App\Post;
use Illuminate\Database\Seeder;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Factory(Post::class, 100) -> create();
    }
}
