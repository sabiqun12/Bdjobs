<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;

class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function UserForm()
    {
        return view('backend.pages.user_form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function UserData()
    {

        $userdata = UserForm::all();
        // $user = UserForm::latest('id')->select(['id', 'name', 'email', 'phone', 'address'])->paginate();
        return view('backend.pages.index', compact('userdata'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function UserStore(Request $request)
    {

         //dd($request->all());
        $userform = UserForm::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address' => $request->address,
            'q_name'=> $request->qualification,
            'institute'=> $request->institute,
            'subject'=> $request->subject,
            'p_year'=> $request->pyear,
            'c_name'=> $request->c_name,
            'c_institute'=> $request->c_in

        ]);
    }


    public function show(string $id)
    {
        //
    }

    public function UserEdit()
    {
        // $user = UserForm::find($id);
        // return view('backend.pages.user_form_edit', compact('user'));
        return view('backend.pages.user_form_edit');
    }

    public function Formpage(){
        return view('backend.pages.createform');
    }
    public function page(){
        return view('backend.layouts.master1');
    }



    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
