<?php

namespace App\Http\Controllers;

use App\Models\SignIn;
use App\Http\Requests\StoreSignInRequest;
use App\Http\Requests\UpdateSignInRequest;

class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('sign-in', [
                "title" => "Sign In"
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
     * @param  \App\Http\Requests\StoreSignInRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSignInRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function show(SignIn $signIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function edit(SignIn $signIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSignInRequest  $request
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSignInRequest $request, SignIn $signIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignIn  $signIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(SignIn $signIn)
    {
        //
    }
}
