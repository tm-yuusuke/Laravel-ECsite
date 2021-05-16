<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('top.index');
    }
}
//viewの()内はviewフォルダの下フォルダ名.ファイル名
//return view('top.index', ['shops'(連想配列キー) => $shop_list(値), 'products' => $product_list]);