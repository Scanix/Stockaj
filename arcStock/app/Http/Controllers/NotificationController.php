<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
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
     * Return all of the notification of the current user
     *
     * @return mixed Json encoded array
     */
    public function all()
    {
        return auth()->user()->notifications;
    }
}
