<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Redirect;
use App\Models\Area_Info;

class DropdownController extends Controller
{
   public function dropdownpage(){

    $dis = Area_Info::where('area_type', 2)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
    return view('backend.pages.dropdown', compact('dis'));

   }
   public function thana(Request $req){

       $district_id = $req->get('districtId');

       $thana = Area_Info::where('pare_id', $district_id)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
       $data = ['responseCode' => 1, 'data' => $thana];
       return response()->json($data);
       return view('backend.pages.dropdown', compact('data'));
   }
}
// $district_id = $request->get('districtId');
//         $thanas = AreaInfo::where('PARE_ID', $district_id)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
//         $data = ['responseCode' => 1, 'data' => $thanas];
//         return response()->json($data);
