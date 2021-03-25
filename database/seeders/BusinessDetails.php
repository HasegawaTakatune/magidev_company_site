<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessDetails extends Seeder
{
    public function run()
    {
        $categories = ['Application','BusinessSoftware','EmbeddedSoftware'];
        $colors = ['Red','Blue','Green','Yellow'];

        foreach($categories as $category){
            foreach($colors as $color){
                DB::table('business_details')->insert([
                    ['category' => $category, 'title' => "{$category} {$color}", 'image' => "images/ComingSoon{$color}.png", 'content' => "{$category} {$color} の内容", 'url' => "#"],
                ]);
            }
        }

        DB::table('business_details')->insert([
            ['category' => "ManagementPhilosophy", 'title' => "経営理念", 'images/magidev_mascot.png', 'content' => "科学と魔法は紙一重と言います。私はこの紙一重の魔法を体験したいと日々思っています。その中で、現実とはかけ離れた独自の世界観はVRを通して、現実とリンクした世界観をAR/MRを駆使して実現していきます。", 'url' => "#"]
        ]);
    }
}
