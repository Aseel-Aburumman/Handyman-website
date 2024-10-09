<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandymanController extends Controller
{
    public function getOne_Client()
    {



        return view('handyman.clinent_perspective');
    }
}
