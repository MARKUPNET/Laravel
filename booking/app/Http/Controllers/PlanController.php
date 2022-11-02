<?php

namespace App\Http\Controllers;

use App\Models\plan;
use Illuminate\Http\Request;

class PlanController extends Controller
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
        $plans = Plan::all();
        return view('/admin/plan/index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/plan/create');
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
            'name'      => 'required',
            'price'     => 'required',
            'note'      => 'nullable',
        ]);

        $plan = new plan;
        $plan->name      = $request->input(["name"]);
        $plan->price     = $request->input(["price"]);
        $plan->note      = $request->input(["note"]);
        $plan->save();

        return redirect()->route('plan.index')
            ->with('success', '登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(plan $plan)
    {
        return view('/admin/plan/show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(plan $plan)
    {
        return view('/admin/plan/edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plan $plan)
    {
        $request->validate([
            'name'      => 'required',
            'price'     => 'required',
            'note'      => 'nullable',
        ]);

        $plan->name      = $request->input(["name"]);
        $plan->price     = $request->input(["price"]);
        $plan->note      = $request->input(["note"]);
        $plan->save();

        return redirect()->route('plan.index')
            ->with('success', '登録しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(plan $plan)
    {
        $plan->delete();
        return redirect()->route('plan.index')
            ->with('success', '削除しました。');
    }
}
