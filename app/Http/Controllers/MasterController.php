<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $categories = Category::with('services')->get(); // Assuming you have a relationship set up
        // dd($categories);  // This will dump and die the data, helping you see if it's being fetched correctly.

        return view('index', compact('categories'));
    }


    public function service()
    {
        return view('main_strc.service');
    }


    // public function Servicesindex()
    // {
    //     return view('index', compact('categories'));
    // }
}
