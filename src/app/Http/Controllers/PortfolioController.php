<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        $userData = User::where('id', $user->id)->first();
        $profile = Profile::where('user_id', $user->id)->first();

        return view('portfolio', ['user' => $userData, 'profile' => $profile]);
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
        // Get the Authenticated user
        $user = Auth::user();

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                // Validate and process each image as needed
                if ($image->isValid()) {
                    $originalName = $image->getClientOriginalName();
                    $filename = $user->name . '_' . $originalName;
                    $image->move(public_path('img'), $filename);

                    // Store the image path in a new portfolio entry
                    $portfolio = new Portfolio();
                    $portfolio->user_id = $user->id;
                    $portfolio->images = $filename;
                    $portfolio->save();
                }
            }
        }

        return redirect('setting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
