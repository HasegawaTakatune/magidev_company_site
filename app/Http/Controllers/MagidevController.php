<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopSlider;

class MagidevController extends Controller
{
    public function index(){
        // インスタンス
        $model = new TopSlider();
        // データ取得
        $data = $model->getData();

        return view('index', ['data' => $data]);
    }
}
