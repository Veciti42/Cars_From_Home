<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('cars', compact('cars'));
    }

    public function show($id)
    {
        return view('car', [
            'car' => Car::findOrFail($id)
        ]);
    }
}
