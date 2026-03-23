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
    public function store(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'environmental_score' => 'required',
            'environmental_impact' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $brand->items()->create([
            'name' => $request->input('name'),
            'environmental_score' => $request->input('environmental_score'),
            'environmental_impact' => $request->input('environmental_impact'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'brand_id' => $brand->id,
        ]);
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
    public function update(Request $request, Item $item)
    {
        $item->update($request->only(['name', 'environmental_score', 'environmental_impact', 'description', 'image', 'price']));

        return redirect()->route('brands.show', $item->brand_id)->with('success', 'Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('brands.show', $item->brand_id)->with('success', 'Item deleted successfully!');
    }
}
