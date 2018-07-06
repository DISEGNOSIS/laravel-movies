<?php

use Illuminate\Database\Seeder;

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directors = factory(\App\Director::class, 10)->create();
        /* $moviesCount = \App\Movie::count();
        foreach($directors as $director) {
            $director->fav_movie_id = rand(1, $moviesCount);
        } */
    }
}
