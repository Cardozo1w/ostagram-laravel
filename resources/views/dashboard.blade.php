@extends('layouts.app')

@section('title', 'Account')

@section('content')
    <div class="flex justify-center">
        <div class="md:w-4/12">
            <div class="w-96 h-96">
                <img src="{{ asset('img/usuario.svg') }}" alt="user img" />
            </div>
        </div>
        <div class="md:w-4/12">
            {{ Auth::user()->name }}
        </div>
    </div>
@endsection
