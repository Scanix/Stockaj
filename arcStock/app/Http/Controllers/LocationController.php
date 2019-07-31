<?php

namespace App\Http\Controllers;

use App\Location;
use App\Person;
use App\Tool;
use App\Http\Requests\LocationRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->get();
        $oldLocations = Location::where('created_at', '<' , Carbon::today())->where('isOver', false)->orderBy('created_at', 'desc')->get();

        return view('locations.list')->with('locations', $locations)->with('oldLocations', $oldLocations)->with('add', true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LocationRequest  $request
     * @return Response
     */
    public function store(LocationRequest $request)
    {
        $location = new Location;
        $location->created_at = now();
        $location->tool_id = $request->input('tool_id');
        $location->person_id = $request->input('person_id');
        $location->isOver = false;
        $location->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $location->isOver = 1;
        $location->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
