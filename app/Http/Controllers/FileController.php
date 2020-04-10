<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FileController extends Controller
{
    public function countryList(){
        return respose()->download(public_path('sideman2.jpg'), 'spider man');
    }

    public function  countrySave(Request $request){
        $fileName = "perfil.jpg";
        $path = $request->file('photo')->move(public_path("/"), $fileName);
        $photoURL = url('/'.$fileName);
        return response()->json(['url' => $photoURL], 200);
    }
}
