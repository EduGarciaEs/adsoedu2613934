<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Track & Field',
            'manufacturer'=>'Nike',
            'releasedate'=>'2017-01-09',
            'description'=>'Dolor ipsum dolor sit amor',
        ]);

        $cat= new Category;
        $cat->name = 'Running';
        $cat->manufacturer = 'Adidas';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'Dolor ipsum dolor sit amor';
        $cat->save();

        $cat= new Category;
        $cat->name = 'Urban';
        $cat->manufacturer = 'Converse';
        $cat->releasedate = '2018-11-10';
        $cat->description = 'Dolor ipsum dolor sit amor';
        $cat->save();

        $cat= new Category;
        $cat->name = 'Formal';
        $cat->manufacturer = 'Puma';
        $cat->releasedate = '2017-08-12';
        $cat->description = 'Dolor ipsum dolor sit amor';
        $cat->save();


    }
}
