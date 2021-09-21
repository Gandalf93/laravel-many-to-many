<?php

use Illuminate\Database\Seeder;
use App\Word;
use Illuminate\support\Str;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 

            // creare l'istanza
            $newWord = new Word();

            // generare i dati
            $newWord->title = 'Word n° ' . ($i + 1);
            $newWord->slug = Str::slug($newWord->title, '-');
            $newWord->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium optio voluptatibus officiis velit eum debitis rem similique quasi animi eligendi fugit modi, corrupti quod, sapiente asperiores unde minus laudantium.';
            
            // salvare i dati
            $newWord->save();
        }
    }
}
