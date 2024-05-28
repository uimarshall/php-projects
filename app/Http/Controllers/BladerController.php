<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Blader;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;



class BladerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Blade template engine will take the response returned from this controller, format it and display it in the browser.
        // return response('Hello, World!');
        return view('chirps.index', [
            'chirps' => Blader::with('user')->latest()->get(),
        ]);
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
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chirps()->create($validated);

        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blader $blader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blader $blader): View
    {
        Gate::authorize('update', $blader);

        return view('chirps.edit', [
            'chirp' => $blader,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blader $blader): RedirectResponse
    {
        Gate::authorize('update', $blader);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $blader->update($validated);

        return redirect(route('chirps.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blader $blader)
    {
        //
    }
}
