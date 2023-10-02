<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ObjectController extends Controller
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_object' =>'required|min:3',
            'deskripsi' => 'required|min:10',
            // 'path_object' => 'required'
        ]);

        Item::create([
            'nama_object' => $request->name,
            'deskripsi' =>$request->deskripsi,
            'path_object' => $request->path_object
        ]);
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
        $item = Item::find($id);
        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $item = Item::find($id);

        $item->update([
            'nama_object'=>$request->nama_object,
            'deskripsi'=>$request->deskripsi,
            'path_object'=>$request->path_object
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
