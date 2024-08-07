<?php

namespace App\Http\Controllers;

use App\Models\Tenis;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = Category::all();
        $games = Tenis::paginate(20);
        return view('tenis.index')->with('tenis', $games);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenis $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenis $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenis $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenis $user)
    {
        //
    }
}


