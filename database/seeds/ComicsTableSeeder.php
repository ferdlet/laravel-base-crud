<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach ($comics as $product) {
            $newComic = new Comic();
            $newComic->title = $product["title"];
            $newComic->description = $product["description"];
            $newComic->thumb = $product["thumb"];
            $newComic->price = $product["price"];;
            $newComic->series = $product["series"];
            $newComic->sale_date = $product["sale_date"];
            $newComic->type = $product["type"];
            $newComic->save();
        }
    }
}
