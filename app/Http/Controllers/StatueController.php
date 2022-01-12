<?php

namespace App\Http\Controllers;

use App\Models\Statue;
use Illuminate\Http\Request;

class StatueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statues = Statue::orderBy('person')->get();
        return view('statues.index', [ 'statues' => $statues ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['person', 'height', 'price']);
        $statue = new Statue();
        $statue->fill($adatok);
        $statue->save();
        return redirect()->route('statues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function show(Statue $statue)
    {
        return view('statues.show', ['statue' => $statue]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function edit(Statue $statue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statue $statue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statue $statue)
    {
        //
    }
}
