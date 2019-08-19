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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = auth()->user()->notifications;

        return view('notifications.list')->with('notifications', $notifications);
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

    /**
     * Mark the notifications as read
     */
    public function read()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
}
