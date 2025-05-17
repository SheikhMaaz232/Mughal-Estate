<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchedulePeriodRequest;
use App\Http\Requests\UpdateSchedulePeriodRequest;
use App\Models\SchedulePeriod;
use PHPUnit\TextUI\XmlConfiguration\UpdateSchemaLocation;

class SchedulePeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periods = SchedulePeriod::all();
        return view('periods.index', compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchedulePeriodRequest $request)
    {
        SchedulePeriod::create($request->all());

        return redirect()->route('periods.index')
            ->with('success', 'Schedule period created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchedulePeriod $period)
    {
        return view('periods.show', compact('period'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchedulePeriod $period)
    {
        return view('periods.edit', compact('period'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateSchedulePeriodRequest $request, SchedulePeriod $period)
    {
        $period->update($request->all());

        return redirect()->route('periods.index')
            ->with('success', 'Schedule Period updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchedulePeriod $period)
    {
        $period->delete();

        return redirect()->route('periods.index')
            ->with('success', 'Schedule Period deleted successfully');
    }
}
