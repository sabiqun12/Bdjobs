<?php

namespace App\Http\Controllers;

use App\Models\PersonalForm;
use App\Models\Education;
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
            'T_title'=> $request->t_title,
            'country'=> $request->country,
            'topic'=> $request->t_cover,
            't_year'=>$request->t_year,
            'institute'=> $request->t_institute,
            'duration'=> $request->duration
        ]);
        // dd($personaldata->id); 
        //  dd($request->elevel);
        foreach($request->elevel as $key=> $value)
        {
            // dd($request->pyear[$key]);
             Education::create([
                'Personal_ID' => $personaldata->id, 
                'Education'=> $request->elevel[$key],
                'Group'=> $request->group[$key],
                'I_Name'=> $request->iname[$key],
                'Board'=> $request->board[$key],
                'Result'=> $request->result[$key],
                'Passing_Year'=> $request->pyear[$key],
                'created_at'=> now(),
                'updated_at'=> now()

              
            ]);

            return redirect()->route('user.data');
            // echo 123;
        }
        // dd(991923);
        

    }

    public function FormEdit($id){

        $personaldata = PersonalForm::find($id);
        // dd($personaldata);
         $education = Education::where('Personal_ID', $id)->get();
        // $education = Education::select('Education','Group', 'I_Name')
        // ->where('Personal_ID', $id)->get();
        //   dd($education);
        return view('backend.pages.edit_form', compact('personaldata', 'education'));
       

       

    } 

    public function FormView($id){
        // dd(123);
        $personaldata = PersonalForm::find($id);
        $educationdata = Education::where('Personal_ID', $id)->get();

        //  dd($educationdata, $personaldata);
        return view('backend.pages.data_view', compact('personaldata', 'educationdata'));

      
        
        // return view('backend.pages.data_view', compact('personaldata'));


    }
    
    public function FormUpdate(Request $request, $id){

        $personaldata = PersonalForm::find($id);
        // dd($personaldata);
        $personaldata->update([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'religion'=> $request->religion,
            'address' => $request->address,
            'phone' => $request->phone,
            'T_title'=> $request->t_title,
            'country'=> $request->country,
            'topic'=> $request->t_cover,
            't_year'=>$request->t_year,
            'institute'=> $request->t_institute,
            'duration'=> $request->duration
           
        ]);

        $edu= Education::where('Personal_ID', $id)->first();
         //dd($edu);
        foreach($request->elevel as $key=> $value)
        {
            // dd($request->all());
            $edu->update([
                'Personal_ID' => $personaldata->id, 
                'Education'=> $request->elevel[$key],
                'Group'=> $request->group[$key],
                'I_Name'=> $request->iname[$key],
                'Board'=> $request->board[$key],
                'Result'=> $request->result[$key],
                'Passing_Year'=> $request->pyear[$key],
                                
            ]);
            //  Education::create([
            //     'Personal_ID' => $personaldata->id, 
            //     'Education'=> $request->elevel[$key],
            //     'Group'=> $request->group[$key],
            //     'I_Name'=> $request->iname[$key],
            //     'Board'=> $request->board[$key],
            //     'Result'=> $request->result[$key],
            //     'Passing_Year'=> $request->pyear[$key],
            //     'created_at'=> now(),
            //     'updated_at'=> now()
        
    // ]);

        }
         return redirect()->route('user.data');
          
    } 
}
