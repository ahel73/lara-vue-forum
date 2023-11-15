<?php

namespace App\Http\Controllers;

use App\Http\Requests\Thema\StoreRequest;
use App\Http\Requests\Thema\UpdateRequest;
use App\Models\Thema;
use Illuminate\Http\Request;

class ThemeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Thema::create($data);

//        return request()->route('branches.show', $data['branch_id']);
        return redirect()->route('branches.show', $data['branch_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Thema $thema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thema $thema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Thema $thema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thema $thema)
    {
        //
    }
}
