<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Http\Requests\StoreSignUpRequest;
use App\Http\Requests\UpdateSignUpRequest;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('sign-up', [
                "title" => "Sign Up"
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSignUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSignUpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function show(SignUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function edit(SignUp $signUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSignUpRequest  $request
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSignUpRequest $request, SignUp $signUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(SignUp $signUp)
    {
        //
    }
}
