<?php
namespace App\Http\Controllers\Admin;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $carsCount = Car::all()->count();
        $availableCount = Car::where('status','available')->count();

        return view('admin.dashboard', compact('carsCount', 'availableCount'));
    }
}
