<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(StoreCityRequest $request)
    {
        City::create($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'City created successfully.');
    }

    public function show(City $city)
    {
        return view('cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        $city->update($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'City updated successfully');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')
            ->with('success', 'City deleted successfully');
    }
}
