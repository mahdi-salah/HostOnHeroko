<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Array_;
use function Symfony\Component\Translation\t;

class TestController extends Controller
{
    function list(): string
    {
        $response = Http::get('http://109.224.53.140/vueips.php')->body();
        $data = json_decode($response, true);
        $points = $data['d'];
        return view('test', compact('points'));
    }
}
