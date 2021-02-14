<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getDataController extends Controller
{
    function list() {
        return view('getData');
    }
}
