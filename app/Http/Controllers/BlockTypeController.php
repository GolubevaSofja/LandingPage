<?php

namespace App\Http\Controllers;

use App\Models\BlockType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class BlockTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blockTypes = DB::table('block_types')->get();

        return $blockTypes;

//        return Inertia::render('HomePage', [
//            'blockTypes' => $blockTypes
//        ]);
    }

    public function getTableName()
    {
        return (new BlockType())->getTable();
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
