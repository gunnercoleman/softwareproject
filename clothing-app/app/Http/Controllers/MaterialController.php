<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role !== 'admin'){
            return redirect()->route('materials.index')->with('error', 'Unauthorized access !');
        }
        return view('materials.create', ['items' => Item::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'environmental_impact' => 'required',
            'description' => 'required|max:500',
            'image' => 'required|image',
            'item_id' => 'required|exists:items,id',
        ]);

        if($request->hasFile('image')){

           $imageName = time().'.'.$request->image->extension();
           $request->image->move(public_path('images/materials'), $imageName);
        }

        Material::create([
            'name' => $request->name,
            'environmental_impact' => $request->environmental_impact,
            'description' => $request->description,
            'image' => $imageName,
            'item_id' => $request->item_id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('materials.index')->with('success', 'Material created successfully !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('materials.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('materials.edit', [
            'material' => $material,
            'items' => Item::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $request->validate([
            'name' => 'required',
            'environmental_impact' => 'required',
            'description' => 'required|max:500',
            'item_id' => 'required|exists:items,id',
        ]);

        $data = $request->only(['name', 'environmental_impact', 'description', 'item_id']);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/materials'), $imageName);

            $data['image'] = $imageName;
        }else{
            $imageName = null;
        }

        $material->update($data);

        return to_route('materials.index')->with('success', 'Material updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        if ($material->image && Storage::disk('public')->exists($material->image)){
            Storage::disk('public')->delete($material->image);
        }

        $material->delete();

        return to_route('materials.index')->with('success', 'Material deleted successfully !');
    }
}
