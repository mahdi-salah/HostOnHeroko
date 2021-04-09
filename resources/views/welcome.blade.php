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


        h1 {
            font-size: 1.1rem;
        }

        /*1rem = 16px*/

        /* Small devices (landscape phones, 544px and up) */
        @media (min-width: 544px) {
            h1 {
                font-size: 1.5rem;
            }

            /*1rem = 16px*/
        }

        /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
        @media (min-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            /*1rem = 16px*/
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            h1 {
                font-size: 2rem;
            }

            /*1rem = 16px*/
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            h1 {
                font-size: 2rem;
            }

            /*1rem = 16px*/
        }


    </style>

</head>
<body>


<!--start Navbar-->
<div class="bg-dark py-3 d-flex justify-content-between px-2 items-center">
    <h1 class="my-link-hover text-white">Rumaila Power Plant Electricity Production</h1>

    <!--Authentication-->
    <div>
        @if (Route::has('login'))
            <div class="text-white pt-md-0 pt-2">
                @auth

                    @if(Auth::user()->name === "admin")
                        <a href="{{ url('/dashboard') }}" class="text-white text-decoration-none my-font-size">
                            <span class="my-link-hover">Dashboard</span>
                        </a>
                    @endif


                <!--start Logout-->
                    <div class="">
                        <!-- Authentication -->
                        <a href="{{ route('logout') }}" class="text-light text-decoration-none my-font-size" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <span class="my-link-hover">{{ __('Logout') }} </span>
                        </a>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                    <!--end logout-->

                @else
                    {{--                            <a href="{{ route('login') }}" class="text-white">Login</a>--}}

                    {{--                    @if (Route::has('register'))--}}
                    {{--                        <a href="{{ route('register') }}" class="ml-md-4 text-white text-decoration-none">--}}
                    {{--                            <span class="my-link-hover my-font-size">Register</span>--}}
                    {{--                        </a>--}}
                    {{--                    @endif--}}
                @endif
            </div>
        @endif
    </div>
</div>
@include('getData')

</body>
</html>
