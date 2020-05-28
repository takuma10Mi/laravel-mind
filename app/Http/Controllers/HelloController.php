<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Controllerクラスを継承する
use App\Book;
class HelloController extends Controller
{
    // viewアクションを定義する。
    public function list()
    {
        $data = [
        'records' => Book::all() 
        ];
        return view('hello.list', $data);
    }

}
