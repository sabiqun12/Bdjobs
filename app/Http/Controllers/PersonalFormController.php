<?php

namespace App\Http\Controllers;

use App\Models\PersonalForm;
use App\Models\Area_Info;
use App\Models\Education;
use Illuminate\Http\Request;

class PersonalFormController extends Controller
{
    public function index(){
        $personaldata = PersonalForm::all();
        return view('backend.pages.index', compact('personaldata'));

    }

    public function FormData(){
        $dis = Area_Info::where('area_type', 2)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
        return view('backend.pages.createform', compact('dis'));
       
    }

    public function PersonalDataStore(Request $request){
        //  dd($request->all());
       

        $personaldata = PersonalForm::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'religion'=> $request->religion,
            'address' => $request->address,
            'district' => $request->district,
            'thana' => $request->thana,
            'phone' => $request->phone,
            'T_title'=> $request->t_title,
            'country'=> $request->country,
            'topic'=> $request->t_cover,
            't_year'=>$request->t_year,
            'institute'=> $request->t_institute,
            'duration'=> $request->duration
        ]);
        //  dd($request->all());
        // dd($personaldata->id); 
        //  dd($request->elevel[0]);
        foreach($request->elevel as $key=> $value)
        {
            //  dd($request->pyear[$key]);
            //  dd($request->all());
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

           
            // echo 123;
        }
        $request->validate([
            // Other validation rules...
            'phone' => [
                'required',
                'string',
                'unique:personal_forms,phone', 
            
            ],
        ]);
        return redirect()->route('user.data');
        // dd(991923);
        

    }


    
    //autocomplete 
    public function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = PersonalForm::select('first_name')
                ->where('first_name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
         <li><a href="#">'.$row->first_name.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function FormEdit($id){

        $personaldata = PersonalForm::find($id);
        // dd($personaldata);
         $education = Education::where('Personal_ID', $id)->get();
        // $education = Education::select('Education','Group', 'I_Name')
        // ->where('Personal_ID', $id)->get();
        //   dd($education);
        $dis = Area_Info::where('area_type', 2)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
     
        return view('backend.pages.edit_form', compact('personaldata', 'education', 'dis'));
       

       

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
            'district' => $request->district,
            'thana' => $request->thana,
            'phone' => $request->phone,
            'T_title'=> $request->t_title,
            'country'=> $request->country,
            'topic'=> $request->t_cover,
            't_year'=>$request->t_year,
            'institute'=> $request->t_institute,
            'duration'=> $request->duration
           
        ]);

      
        // dd($request->all());
        foreach($request->elevel as $key=> $value)
        {

            // dd($request->e_id);
            if(isset($request->e_id[$key])){
                $edu= Education::where('id', $request->e_id[$key])->first();

            }
            else{
                //  dd($request->elevel);
                $edu= new Education();
            }
          
            //    dd($request->all());
            $edu->Personal_ID=$personaldata->id;
            $edu->Education=$request->elevel[$key];
            $edu->Group=$request->group[$key];
            $edu->I_Name= $request->iname[$key];
            $edu->Board=$request->board[$key];
            $edu->Result=$request->result[$key];
            $edu->Passing_Year=$request->pyear[$key];
            $edu->save();



        }
        
        return redirect()->route('user.data');    
    } 

    public function delete(){

    }

    // public function District(){

    //     $dis = Area_Info::where('area_type', 2)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
    //     return view('backend.pages.createform', compact('dis'));
    
    //    }

       public function thana(Request $req){

        $district_id = $req->get('districtId');
        $thana = Area_Info::where('pare_id', $district_id)->orderBy('area_nm', 'ASC')->pluck('area_nm', 'area_id')->toArray();
        $data = ['responseCode' => 1, 'data' => $thana];
        return response()->json($data);
        return view('backend.pages.createform', compact('data'));
    }

    public function taskview(){

        return view('backend.pages.testform');
       } 
}