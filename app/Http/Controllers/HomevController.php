<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalForm;



class HomevController extends Controller
{
    public function Formpage(){
        return view('backend.pages.testform');
    }
    public function FormdataStore(Request $request){
//          dd($request->all());
    }

//    public function index()
//    {
//        return view('backend.pages.autocomplete');
//    }

//    function fetch(Request $request)
//    {
//        if($request->get('query'))
//        {
//            $query = $request->get('query');
//            $data = DB::table('apps_countries')
//                ->where('country_name', 'LIKE', "%{$query}%")
//                ->get();
//            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
//            foreach($data as $row)
//            {
//                $output .= '
//       <li><a href="#">'.$row->country_name.'</a></li>
//       ';
//            }
//            $output .= '</ul>';
//            echo $output;
//        }
//    }


public function viewpage(){
    return view('backend.pages.searchauto');
}
public function postpage(){
    return view('backend.pages.postpage');
}

public function autocomplete(Request $request)
{
    // dd($request->all());
    $res = PersonalForm::select("first_name")
            ->where("first_name","LIKE","%{$request->term}%")
            ->get();

    return response()->json($res);
}
}
