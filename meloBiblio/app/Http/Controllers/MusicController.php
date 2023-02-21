<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Music $music): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music): RedirectResponse
    {
        //
    }
}
