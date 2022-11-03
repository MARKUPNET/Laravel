<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->booking = new Booking();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('/admin/calendar/index');
    }


    public function getBookings()
    {

        $bookingList = $this->booking->getAllFullcalendar();

        return $bookingList;
    }

}
