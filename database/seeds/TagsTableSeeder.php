<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->name = 'html';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'html';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'php';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'css';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'laravel';
        $tag->save();

        $tag = new Tag();
        $tag->name = '.net';
        $tag->save();
    }
}
