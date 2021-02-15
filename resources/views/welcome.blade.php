<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RMIG Website</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!--icon title-->

    <link rel="icon" href="{!! asset('MOE.png') !!}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .my-link-hover:hover{
            color: #999999;
        }
        .nav-font-size{
            font-size: 1rem;
        }
        body{
            background-color: #f2f2f2
        }
    </style>

</head>
<body>


<?php
use Illuminate\Support\Facades\Http;
$response = Http::get('http://109.224.53.140/vueips.php')->body();
$data = json_decode($response, true);
$points = $data['d'];

$d_4041 = $points['d_4041'];
$d_4042 = $points['d_4042'];
$d_4043 = $points['d_4043'];
$d_4044 = $points['d_4044'];
$d_4045 = $points['d_4045'];
$d_4046 = $points['d_4046'];
$d_4047 = $points['d_4047'];
$d_4048 = $points['d_4048'];
$d_4049 = $points['d_4049'];
$d_4032 = $points['d_4032'];
?>


<div>

    <!--start Navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">
            <svg width="143" height="32" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <title>background</title>
                    <rect fill="none" id="canvas_background" height="602" width="802" y="-1" x="-1"/>
                </g>
                <g>
                    <title>Layer 1</title>
                    <path id="svg_1"
                          d="m15.258,26.865a4.043,4.043 0 0 1 -1.133,2.917a4.006,4.006 0 0 1 -2.872,1.218a3.992,3.992 0 0 1 -2.872,-1.218a4.028,4.028 0 0 1 -1.133,-2.917c0.009,-0.698 0.2,-1.382 0.557,-1.981c0.356,-0.6 0.863,-1.094 1.47,-1.433c-0.024,0.109 0.09,-0.055 0,0l1.86,-1.652a8.495,8.495 0 0 0 2.304,-5.793c0,-2.926 -1.711,-5.901 -4.17,-7.457c0.094,0.055 -0.036,-0.094 0,0a3.952,3.952 0 0 1 -1.469,-1.433a3.975,3.975 0 0 1 -0.557,-1.98a4.042,4.042 0 0 1 1.133,-2.918a4.006,4.006 0 0 1 2.871,-1.218a3.99,3.99 0 0 1 2.872,1.218a4.025,4.025 0 0 1 1.133,2.917a8.521,8.521 0 0 0 2.347,5.832l0.817,0.8c0.326,0.285 0.668,0.551 1.024,0.798c0.621,0.33 1.142,0.826 1.504,1.431a3.902,3.902 0 0 1 -1.504,5.442c0.033,-0.067 -0.063,0.036 0,0a8.968,8.968 0 0 0 -3.024,3.183a9.016,9.016 0 0 0 -1.158,4.244zm4.483,-21.742c0,0.796 0.235,1.575 0.676,2.237a4.01,4.01 0 0 0 1.798,1.482a3.99,3.99 0 0 0 4.366,-0.873a4.042,4.042 0 0 0 0.869,-4.386a4.02,4.02 0 0 0 -1.476,-1.806a3.994,3.994 0 0 0 -5.058,0.501a4.038,4.038 0 0 0 -1.175,2.845zm4.007,17.717c-0.792,0 -1.567,0.236 -2.226,0.678a4.021,4.021 0 0 0 -1.476,1.806a4.042,4.042 0 0 0 0.869,4.387a3.99,3.99 0 0 0 4.366,0.873a4.01,4.01 0 0 0 1.799,-1.484a4.039,4.039 0 0 0 -0.5,-5.082a4,4 0 0 0 -2.832,-1.18l0,0.002zm10.252,-6.846c0,-0.796 -0.235,-1.574 -0.675,-2.236a4.01,4.01 0 0 0 -1.798,-1.483a3.99,3.99 0 0 0 -4.367,0.873a4.042,4.042 0 0 0 -0.869,4.387a4.02,4.02 0 0 0 1.476,1.806a3.993,3.993 0 0 0 2.226,0.678a4.003,4.003 0 0 0 2.832,-1.18a4.04,4.04 0 0 0 1.175,-2.846l0,0.001z"
                          fill="#6366f1"/>
                    <path id="svg_2"
                          d="m5.007,11.969c-0.793,0 -1.567,0.236 -2.226,0.678a4.021,4.021 0 0 0 -1.476,1.807a4.042,4.042 0 0 0 0.869,4.386a4.001,4.001 0 0 0 4.366,0.873a4.011,4.011 0 0 0 1.798,-1.483a4.038,4.038 0 0 0 -0.5,-5.08a4.004,4.004 0 0 0 -2.831,-1.181z"
                          fill="#6366f1"/>
                    <text font-style="italic" font-weight="normal" stroke="null"
                          transform="matrix(1.7068230766139016,0,0,1,-29.800895363907358,1.158940315246582) "
                          xml:space="preserve" text-anchor="start" class="font-extralight" font-size="17" id="svg_5"
                          y="21.30629" x="41.83257" stroke-opacity="null" stroke-width="0" fill="#ffffff">RMIG</text>
                </g>
            </svg>
        </a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-font-size">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/"><span class="my-link-hover">Home</span> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><span class="my-link-hover">Contact us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><span class="my-link-hover">About us</span></a>
                </li>
            </ul>
            <!--end Navbar-->

            <!--Authentication-->
                    <div class="ml-auto">
                        @if (Route::has('login'))
                            <div class="text-white">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-white">Login</a>

{{--                                    @if (Route::has('register'))--}}
{{--                                        <a href="{{ route('register') }}" class="ml-4 text-white">Register</a>--}}
{{--                                    @endif--}}
                                @endif
                            </div>
                        @endif
                    </div>

        </div>
    </nav>


    @include('getData')

</div>

</body>
</html>
