<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenis;

class TenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenis= new Tenis;
        $tenis-> title='Nike vaporfly 01';
        $tenis-> developer='Nike';
        $tenis-> releasedate='2011-11-28';
        $tenis-> category_id=1;
        $tenis-> user_id=1;
        $tenis-> price=59;
        $tenis-> genre='Running';
        $tenis-> description='Lorem ipsum dolor sit amet';
        $tenis-> save();
    }
}
