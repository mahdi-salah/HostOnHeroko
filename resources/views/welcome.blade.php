<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RMIG Website</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


    <!--icon title-->

    <link rel="icon" href="{!! asset('MOE.png') !!}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .my-link-hover:hover {
            color: #999999;
        }

        .my-font-size {
            font-size: 1rem;
        }


        body {
            background-color: #f2f2f2
        }


        h1 {font-size:1.1rem;} /*1rem = 16px*/

        /* Small devices (landscape phones, 544px and up) */
        @media (min-width: 544px) {
            h1 {font-size:1.5rem;} /*1rem = 16px*/
        }

        /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
        @media (min-width: 768px) {
            h1 {font-size:2rem;} /*1rem = 16px*/
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            h1 {font-size:2rem;} /*1rem = 16px*/
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            h1 {font-size:2rem;} /*1rem = 16px*/
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



<!--start Navbar-->
<div class="bg-dark py-3">
    <div class="row mx-auto">
        <h1 class="my-link-hover text-white text-center mx-auto">Rumaila Power Plant Electricity Production</h1>
    </div>
</div>
@include('getData')

</body>
</html>
