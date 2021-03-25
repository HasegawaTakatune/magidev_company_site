<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TopSlider extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'top_slider';
    // 主キー
    protected $guarded = array('id');
    // タイムスタンプの有無
    public $timestamps = false;

    public function getData(){
        $data = DB::table($this->table)->get();
        return $data;
    }
}
