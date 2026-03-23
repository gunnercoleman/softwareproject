<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role !== 'admin'){
            return redirect()->route('brands.index')->with('error', 'Unauthorized access !');
        }
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'environmental_score' => 'required|integer',
            'environmental_impact' => 'required',
            'description' => 'required|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($request->hasFile('image')){

           $imageName = time().'.'.$request->image->extension();
           $request->image->move(public_path('images/brands'), $imageName);
        }

        Brand::create([
            'name' => $request->name,
            'environmental_score' => $request->environmental_score,
            'environmental_impact' => $request->environmental_impact,
            'description' => $request->description,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('brands.index')->with('success', 'Brand created successfully !');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        $brand -> load('items');
        return view('brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'environmental_score' => 'required|integer',
            'environmental_impact' => 'required',
            'description' => 'required|max:500'
        ]);

        $data = $request->only(['name', 'environmental_score', 'environmental_impact', 'description']);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/brands'), $imageName);

            $data['image'] = $imageName;
        }else{
            $imageName = null;
        }

        $brand->update($data);

        return to_route('brands.index')->with('success', 'Brand edited successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if ($brand->image && Storage::disk('public')->exists($brand->image)){
            Storage::disk('public')->delete($brand->image);
        }

        $brand->delete();

        return to_route('brands.index')->with('success', 'Brand deleted successfully !');
    }
}
