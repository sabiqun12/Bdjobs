<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomevController extends Controller
{
    public function Formpage(){
        return view('backend.pages.testform');
    }
    public function FormdataStore(Request $request){
//          dd($request->all());
    }
}
