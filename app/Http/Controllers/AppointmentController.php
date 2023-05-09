<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class AppointmentController extends Controller
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
        $appData = Appointment::where('user_id', $user->id)->paginate(5);

        return view('appointment', ['appointments' => $appData]);
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
        // Retrieve the authenticated user
        $user = Auth::user();

        $appointment = new Appointment();
        $appointment->cus_name = $request->input('cus_name');
        $appointment->start_date = $request->input('start_date');
        $appointment->end_date = $request->input('end_date');
        $appointment->event = $request->input('event');
        $appointment->start_time = $request->input('start_time');

        // Set the user_id
        $appointment->user_id = $user->id;

        // Save the appointment
        $appointment->save();

        // Redirect back to the index or show page
        return redirect()->route('appointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);

        return view('editingAppointment', ['appointment' => $appointment]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the appointment by ID
        $appointment = Appointment::findOrFail($id);

        // Update the appointment with the form data
        $appointment->update($request->all());

        // Optionally, you can add a success message or perform other actions

        // Redirect back to the appointments index page
        return redirect()->route('appointment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        // Delete the appointment
        $appointment->delete();

        // Redirect back to the index or show page
        return redirect()->route('appointment');
    }
}
