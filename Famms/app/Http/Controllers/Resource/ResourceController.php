<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\Resource;
use App\Models\category;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all();

        return view("Resource.Resource",compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Resource $resource)
    {

        // DD("Create");


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(cr $cr)
    public function edit(Resource $resource)
    {
        dd("edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ,Resource $resource)
    {
        // echo "delete $id";
    }
}
