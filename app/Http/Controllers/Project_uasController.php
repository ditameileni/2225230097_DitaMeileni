<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Project_UAS;
use Illuminate\View\View;

class Project_uasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $concert = Project_uas::all();
        return view ('concert.index')->with('concert',$concert);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('concert.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Project_uas::create($input);
        return redirect('concert');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $concert = Project_UAS::find($id);
        return view('concert.show')->with('concert', $concert);
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $concert = Project_UAS::find($id);
        return view('concert.edit')->with('concert',$concert);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $concert = Project_UAS::find($id);
        $input = $request->all();
        $concert->update($input);
        return redirect('concert');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Project_UAS::destroy($id);
        return redirect('concert');
    }
}
