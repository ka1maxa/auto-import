<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.index', compact('cars',));
    }

    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate
        ([
            'name' => 'required|string|max:255',
            'status' => 'required|in:available,sold',
        ]);

        Car::create($data);

        return redirect()->route('admin.car.index')->with('sussess','daemata');
    }

    public function edit(Car $car)
    {
        return view('admin.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $data = $request->validate
        ([ 
            'name' => 'required|string|max:255',
            'status' => 'required|in:available,sold',           
        ]);

        $car->update($data);

        return redirect()->route('admin.car.index')->with('sussess','ganaxlda');
    }
}
