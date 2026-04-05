<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Brand;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'name' => 'required',
            'environmental_score' => 'required',
            'environmental_impact' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
            'brand_id' => 'required|exists:brands,id', 
        ]);

        Item::create($validated);

        return redirect()->route('brands.show', $validated['brand_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required',
            'environmental_score' => 'required',
            'environmental_impact' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
            'brand_id' => 'required|exists:brands,id', 
        ]);

        $item->update($validated);

        return redirect()->route('brands.show', $brand)->with('success', 'Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Brand $brand, Item $item)
{
    $item->delete();

    return redirect()->route('brands.show', $brand)->with('success', 'Item deleted successfully!');
}
}
