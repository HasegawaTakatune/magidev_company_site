<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopSliderSeeder extends Seeder
{
    public function run()
    {
        $colors = ['Red','Blue','Green','Yellow','Purple','Black','White'];

        foreach($colors as $color){
            DB::table('top_slider')->insert([
                ['name' => "ComingSoon{$color}", 'path' => "images/ComingSoon{$color}.png", 'url' => "#"],
            ]);
        }
    }
}
