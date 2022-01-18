<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $paintings = Statue::all();
        return response()->json($paintings);
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
        $statue = new Statue();
        $statue->fill($request->all());
        $statue->save();
        return response()->json($statue, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function show(Statue $statue)
    {
        return response()->json($statue);
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
        $statue->fill($request->all());
        $statue->save();
        return response()->json($statue, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Statue::destroy($id);
        return response()->noContent();
    }
}
