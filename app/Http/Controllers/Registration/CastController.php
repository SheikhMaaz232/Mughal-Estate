<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCastRequest;
use App\Http\Requests\UpdateCastRequest;
use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('casts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCastRequest $request)
    {
        Cast::create($request->all());

        return redirect()->route('casts.index')
            ->with('success', 'Cast created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
        return view('casts.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        return view('casts.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateCastRequest $request, Cast $cast)
    {
        $cast->update($request->all());

        return redirect()->route('casts.index')
            ->with('success', 'Cast updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        $cast->delete();

        return redirect()->route('casts.index')
            ->with('success', 'Cast deleted successfully');
    }
}
