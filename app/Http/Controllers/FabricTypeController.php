<?php

namespace App\Http\Controllers;

use App\Models\FabricType;
use Illuminate\Http\Request;

class FabricTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabricType = FabricType::all();
        return view('admin.fabric.index')->with(['retrievedData'=> $fabricType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fabricType = new FabricType();
        $fabricType->fabric_name = $request->newFabricNameInput;
        $fabricType->fabric_quality = $request->newFabricQualityInput;
        $fabricType->save();
        echo("<script>alert('A New Fabric Type has been added in System:')</script>");
        return redirect()->route('fabrics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FabricType  $fabricType
     * @return \Illuminate\Http\Response
     */
    public function show(FabricType $fabricType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FabricType  $fabricType
     * @return \Illuminate\Http\Response
     */
    public function edit(FabricType $fabricType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FabricType  $fabricType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FabricType $fabricType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FabricType  $fabricType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FabricType $fabricType)
    {
        //
    }
}
