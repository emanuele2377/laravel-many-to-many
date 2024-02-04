<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'cronaca',
                'description' => 'articoli che riguardano fatti di cronaca',
            ],
            [
                'name' => 'tecnologia',
                'description' => 'troverai le più recenti novità in ambito hi-tech',
            ],
            [
                'name' => 'sport',
                'description' => 'non guardo il calcio',
            ]
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
