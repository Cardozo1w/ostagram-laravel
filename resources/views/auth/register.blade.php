@extends('layouts.app')

@section('titulo', 'Create Account')

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8">
        <div class="md:w-5/12 flex items-center">
            <div class="rounded-lg h-full">
                <img src={{ asset('img/img1.JPG') }} class="h-full rounded-lg shadow object-cover object-center-bottom p-4 bg-white"/>
            </div>
        </div>
        <div class="md:w-4/12 p-6 rounded-lg shadow bg-white">
            <form action="{{route('register')}}" method="POST">
               @csrf 
                <div class="mb-5">
                    <label for="name" class="mb-2 uppercase block text-gray-500 font-bold">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="w-full border p-3 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('name')}}"
                        >
                        @error('name')
                            <span class="text-red-500 text-sm" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 uppercase block text-gray-500 font-bold">Username</label>
                    <input type="text" username="username" id="name" placeholder="Username"
                        class="w-full border p-3 rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 uppercase block text-gray-500 font-bold">Email</label>
                    <input type="email" name="email" id="name" placeholder="example@example.com"
                        class="w-full border p-3 rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 uppercase block text-gray-500 font-bold">Password</label>
                    <input type="password" name="password" id="name" placeholder="Password"
                        class="w-full border p-3 rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 uppercase block text-gray-500 font-bold">Confirm
                        Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Password" class="w-full border p-3 rounded-lg">
                </div>
                <div class="mb-5">
                    <input type="submit" value="Submit"
                        class="w-full border p-3 rounded-lg bg-indigo-600 text-gray-100 hover:bg-indigo-700 cursor-pointer transition-shadow font-bold">
                </div>
            </form>
        </div>
    </div>
@endsection
