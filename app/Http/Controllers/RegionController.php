<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::all();
        return view('Region.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $region = Region::create([
            'author' => 'salommmmm',
            'eng' => [
                'name' => $request->input('name_eng'),
            ],
            'uzb' => [
                'name' => $request->input('name_uzb')
            ],
        ]);
        $region->save();
        return redirect()->route('regions.index')
            ->with('success', 'Region created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        $region->delete();
        return redirect()->route('regions.index')
            ->with('danger', 'Region deleted successfully.');
    }
}
