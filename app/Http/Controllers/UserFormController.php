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
    public function create()
    {

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
