<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
