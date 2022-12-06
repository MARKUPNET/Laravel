<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noshi;

class NoshiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noshi = Noshi::where('id', $id)->first();

        return view('/admin/noshi/edit', compact('noshi', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noshi $noshi)
    {

        $noshi->status    = $request->input(["status"]);

        if( $noshi->status == 0 ){

            $noshi->type    = null;
            $noshi->color    = null;
            $noshi->position   = null;
            $noshi->name     = null;
            $noshi->note    = null;

        }else{

            $noshi->type    = $request->input(["type"]);
            $noshi->color    = $request->input(["color"]);
            $noshi->position   = $request->input(["position"]);
            $noshi->name     = $request->input(["name"]);
            $noshi->note    = $request->input(["note"]);

        }

        $noshi->save();

        return redirect()->route('noshi.edit', $noshi->id)
            ->with('success', '登録しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
