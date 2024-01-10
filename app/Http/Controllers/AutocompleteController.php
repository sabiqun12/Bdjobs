<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\apps_countries;

class AutocompleteController extends Controller
{
    public function index()
    {
        return view('backend.pages.autocomplete');
    }

    // function fetch(Request $request)
    // {
    //     if($request->get('query'))
    //     {
    //         $query = $request->get('query');
    //         $data = apps_countries::select('country_name')
    //             ->where('country_name', 'LIKE', "%{$query}%")
    //             ->get();
    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    //         foreach($data as $row)
    //         {
    //             $output .= '
    //    <li><a href="#">'.$row->country_name.'</a></li>
    //    ';
    //         }
    //         $output .= '</ul>';
    //         echo $output;
    //     }
    // }

}
