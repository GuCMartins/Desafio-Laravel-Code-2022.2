<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Models\Product;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storages = Storage::all();
        $products = Product::all();
        return view('admin.storages.index', compact('storages','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storage = new Storage();
        $products = Product::all();
        return view('admin.storages.create',compact('storage','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        storage::create($data);

        return redirect()->route('storages.index')->with('successful',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function show(Storage $storage)
    {
        return view('admin.storages.show', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storage = Storage::findOrFail($id);
        $prodname = Product::findOrFail($storage->id);
        $products = Product::all();

        return view('admin.storages.edit', compact('storage','products','prodname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        $data = $request->all();
        $storage->update($data);

        return redirect()->route('storages.index')->with('successful',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storage $storage)
    {
        $storage->delete();
        return redirect()->route('storages.index')->with('successful',true);
    }
}
