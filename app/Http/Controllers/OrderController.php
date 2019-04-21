<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            ['id' => 1, 'name' => 'James', 'drink' => 'Coffee'],
            ['id' => 2, 'name' => 'John', 'drink' => 'Latte']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'id' => $request->id,
            'name' => $request->name,
            'drink' => $request->drink
        ]);
    }

    public function destroy(Request $request)
    {
        return response()->json([
            'id' => $request->id
        ]);
    }
}
