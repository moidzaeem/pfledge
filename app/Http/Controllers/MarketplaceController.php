<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marketPlaces = Marketplace::all();
        return view('marketplace.index', compact('marketPlaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketplace.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Marketplace $marketplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketplace $marketplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marketplace $marketplace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketplace $marketplace)
    {
        //
    }

    public function getAllForAdmin()
    {
        $marketplaces = Marketplace::all();
        return view('marketplace.admin.index', compact('marketplaces'));
    }
}
