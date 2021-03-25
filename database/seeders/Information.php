<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Information extends Seeder
{
    public function run()
    {
        $rows = [
            array('importance'=>"-", 'title'=>"新規作成のお知らせ", 'content'=>"ホームページが作成されました。", 'url'=>"#"),
            array('importance'=>"低", 'title'=>"マジでデビるん!!", 'content'=>"デビにゃんがここを支配すると宣言しました。", 'url'=>"#"),
            array('importance'=>"中", 'title'=>"射撃するん!!", 'content'=>"デビにゃんがARシューティングを作成することを宣言しました。", 'url'=>"#"),
            array('importance'=>"高", 'title'=>"ビビるん!!", 'content'=>"デビにゃんがVRホラーを作成することを宣言しました。", 'url'=>"#"),
        ];

        foreach($rows as $row){
            DB::table('information')->insert([
                ['importance'=>$row['importance'], 'title'=>$row['title'], 'content'=>$row['content'], 'url'=>$row['url']],
            ]);
        }
    }
}
