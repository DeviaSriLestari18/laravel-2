<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data= [
            "nama"=>"devia",
            "alamat"=>"bandung",
            "agama"=>"islam",
            "jk"=>"p",
            "hobi"=>[
                "membaca" ,"menari",
            ]
        ];

        return view('latihan.perkenalan', compact('data'));
    }

    public function animals(){
        $animals= [
            "lion" , "crocodile", "rabbit", "eagle",
        ];

        return view('latihan.animal', ['hewan'=>$animals]);
    }
}
