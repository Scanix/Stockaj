<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PersonController extends Controller
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
        $order = Input::get('order');
        $search = Input::get('search');

        if(isset($search))
        {
            $persons = Person::where('name', 'like', '%'.$search.'%')->paginate(15);
        }
        else
        {
            if (isset($order))
            {
                $persons = Person::orderBy($order)->paginate(15);
            }
            else
            {
                $persons = Person::paginate(15);
            }
        }

        return view('persons.list')->with('persons', $persons);
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
     * @param  PersonRequest  $request
     * @return Response
     */
    public function store(PersonRequest $request)
    {
        $person = new Person;
        $person->name = $request->input('name');
        $person->sector_id = $request->input('sector_id');
        $person->isResponsible = $request->has('isResponsible');
        $person->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('persons.unique')->with('person', $person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
