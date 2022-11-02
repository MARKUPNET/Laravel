<?php

namespace App\Http\Controllers;

use App\Models\time;
use Illuminate\Http\Request;

class TimeController extends Controller
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
        $times = Time::all();
        return view('/admin/time/index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/time/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'timeslot'      => 'required',
        ]);

        $time = new Time;
        $time->timeslot      = $request->input(["timeslot"]);
        $time->save();

        return redirect()->route('time.index')
            ->with('success', '登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function show(time $time)
    {
        return view('/admin/time/show', compact('time'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function edit(time $time)
    {
        return view('/admin/time/edit', compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, time $time)
    {
        $request->validate([
            'timeslot'      => 'required',
        ]);

        $time->timeslot      = $request->input(["timeslot"]);
        $time->save();

        return redirect()->route('time.index')
            ->with('success', '編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function destroy(time $time)
    {
        $time->delete();
        return redirect()->route('time.index')
            ->with('success', '削除しました。');
    }
}
