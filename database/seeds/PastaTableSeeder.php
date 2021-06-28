<?php

use App\Pasta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PastaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_pasta = config('pasta');
        foreach($array_pasta as $pasta_item){

            $new_pasta = new Pasta();
            $new_pasta->title = $pasta_item['titolo'];
            $new_pasta->slug = Str::slug($new_pasta->title, '-');
            $new_pasta->description = $pasta_item['descrizione'];
            $new_pasta->type = $pasta_item['tipo'];
            $new_pasta->image = $pasta_item['src'];
            $new_pasta->cooking_time = $pasta_item['cottura'];
            $new_pasta->weight = $pasta_item['peso'];
            $new_pasta->save()
        }
    }
}
