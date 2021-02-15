@if(Auth::user()->name === "admin")
    <x-app-layout>
        <x-slot name="header">
            <h2 class="h4 font-weight-bold my-link-hover">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        {{--    <x-jet-welcome />--}}
    </x-app-layout>

    <style>
        .my-link-hover{
            color: #999999;
        }
    </style>
@endif
