<?php

namespace App\Http\Controllers;

use App\Models\PersonalForm;
use Illuminate\Http\Request;

class PersonalFormController extends Controller
{
    public function index(){
        $personaldata = PersonalForm::all();
        return view('backend.pages.index', compact('personaldata'));

    }

    public function FormData(){
        return view('backend.pages.createform');
    }

    public function PersonalDataStore(Request $request){
        // dd($request->all());
        $personaldata = PersonalForm::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'religion'=> $request->religion,
            'address' => $request->address,
            'phone' => $request->phone,
            'T_title'=>$request->t_title,
            'country'=>$request->country,
            'topic'=>$request->t_cover,
            't_year'=>$request->t_year,
            'institute'=>$request->t_institute,
            'duration'=>$request->duration,
        ]);

    }

    public function FormEdit($id){

        $personaldata = PersonalForm::find($id);
        return view('backend.pages.edit_form', compact('personaldata'));
    } 

    public function FormView($id){
        $personaldata = PersonalForm::find($id);
        return view('backend.pages.data_view', compact('personaldata'));

    }
    
    public function FormUpdate(Request $request, $id){

        $personaldata = PersonalForm::find($id);
        $personaldata->update([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'religion'=> $request->religion,
            'address' => $request->address,
            'phone' => $request->phone,
           
        ]);;
        return redirect()->route('user.data');
          
    } 
}
