<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Controllerクラスを継承する
class HelloController extends Controller
{
    // viewアクションを定義する。
    public function view()
    {
        $data = [
        'msg' => 'こんにちは、世界！'
        ];
        return view('hello.view', $data);
    }

}
