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

}
