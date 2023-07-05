<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->hasFile('avatar') && $request->avatar->isValid()) {
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->move(public_path('img'), $filename);
        } else {
            $filename = $user->avatar;
        }

        $user->avatar = $filename;
        $user->save();

        return redirect('setting');
    }

    //delete
    public function destroy($id)
    {
        // Find the user record by ID
        $user = User::find($id);

        // Check if the user exists
        if ($user) {
            // Delete the user record
            $user->delete();

            // Redirect the user or show a success message
            return redirect()->route('home')->with('success', 'Account deleted successfully.');
        } else {
            // Redirect the user or show an error message
            return redirect()->route('home')->with('error', 'Account not found.');
        }
    }
}
