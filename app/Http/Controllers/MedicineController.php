<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MedicineController extends Controller
{
 
    public function index()
    {
        $medicine = Medicine::all();
        return view('pemesanan-obat', compact('medicine'));
    }

    public function pemesananObat2($id)
    {
        $medicine = Medicine::find($id);
        $total = $medicine->price;
        return view('pemesanan-obat-2', compact('medicine', 'total'));
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'code' => 'required',
            'description' => 'required',
            'IMG_url' => 'required',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $medicine = Medicine::find($id);
        $medicine->delete();
    }
}
