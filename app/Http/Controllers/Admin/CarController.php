<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars',));
    }

    public function create()
    {
        return view('admin.cars.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate
        ([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'currency' => 'nullable|string|max:3',
            'mileage' => 'nullable|integer',
            'description' => 'nullable|string|max:1000', 
        ]);
         $data['status']= 'available';
        Car::create($data);

        return redirect()->route('admin.cars.index')->with('sussess','daemata');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $data = $request->validate
        ([ 
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'currency' => 'nullable|string|max:3',
            'mileage' => 'nullable|integer',
            'description' => 'nullable|string|max:1000',           
        ]);
        $car->update($data);

        return redirect()->route('admin.cars.index')->with('sucsess','ganaxlda');
    }

    public function destroy(Car $car)
    {
        $car->delete();   

        return redirect()->route('admin.cars.index')->with('sucsess','waishala');
    }
}
