<?php

namespace App\Http\Controllers;

use App\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Location::select([
            // This aggregates the data and makes available a 'count' attribute
            DB::raw('count(id) as `count`'),
            // This throws away the timestamp portion of the date
            DB::raw('DATE(created_at) as day')
            // Group these records according to that day
        ])
        ->orderBy('created_at', 'desc')
        ->groupBy('day')->get();

        $output = [];
        foreach($data as $entry) {
            array_push($output, ['day' => $entry->day, 'count' => $entry->count]);
        }

        return view('reports.list')->with('reports', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  $day
     * @return \Illuminate\Http\Response
     */
    public function show(String $day)
    {
        $locations = Location::whereDate('created_at', $day)->orderBy('created_at', 'desc')->get();

        return view('locations.list')->with('locations', $locations);
    }
}
