<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Brand;
use App\Models\Category;
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
        if(auth()->user()->role !== 'admin'){
            return redirect()->route('brands.index')->with('error', 'Unauthorized access !');
        }
        return view('items.create', ['brands' => Brand::all(), 'categories' => Category::all()]);
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
        'image' => 'required|image',
        'brand_id' => 'required|exists:brands,id',
        'category_id' => 'required|exists:categories,id',
    ]);

    if($request->hasFile('image')){

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/items'), $imageName);
    }

    Item::create([
        'name' => $request->name,
        'environmental_score' => $request->environmental_score,
        'environmental_impact' => $request->environmental_impact,
        'price' => $request->price,
        'description' => $request->description,
        'image' => $imageName,
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id,
        'created_at' => now(),
        'updated_at' => now()
    ]);

        return to_route('brands.show', $request->brand_id)->with('success', 'Item created successfully !');

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
        return view('items.edit', [
            'item' => $item,
            'brands' => Brand::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required',
            'environmental_score' => 'required',
            'environmental_impact' => 'required',
            'price' => 'required',
            'description' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id', 
        ]);
        
        $item->update($validated);

        return redirect()->route('brands.show', $item->brand_id)->with('success', 'Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $brandId = $item->brand_id;

        $item->delete();

        return redirect()->route('brands.show', $brandId)->with('success', 'Item deleted successfully!');
    }
}
