<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the user data using Eloquent
        $userData = User::where('id', $user->id)->first();
        $userProfile = Profile::where('user_id', $user->id)->first();

        // Pass the user data to the view
        return view('profile', ['user' => $userData, 'profile' => $userProfile]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userProfile = Profile::where('user_id', $user->id)->first();

        return view('profile', ['user' => $user, 'profile' => $userProfile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $profile = Profile::where('user_id', $user->id)->first();

        // Update the user record with the provided form data
        if ($request->has('email')) {
            $user->email = $request->input('email');
        }

        if ($request->has('name')) {
            $user->name = $request->input('name');
        }

        if ($request->has('address')) {
            $user->address = $request->input('address');
        }

        if ($request->has('contact')) {
            $user->contact = $request->input('contact');
        }

        if ($request->has('user_type')) {
            $user->user_type = $request->input('user_type');
        }

        //profile
        if ($request->has('fee')) {
            $profile->fee = $request->input('fee');
        }

        if ($request->has('availabiity')) {
            $profile->availability = $request->input('availability');
        }

        // Check if a new password is provided
        $password = $request->input('password');
        if ($password) {
            $user->password = Hash::make($password); // Hash the password before storing it
        }

        $user->save();
        $profile->save();

        return redirect()->route('setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
