@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="md:flex md:justify-center md:gap-8">
        <div class="md:w-5/12 flex items-center">
            <div class="rounded-lg h-full">
                <img src={{ asset('img/img1.JPG') }}
                    class="h-full rounded-lg shadow object-cover object-center-bottom p-4 bg-white" />
            </div>
        </div>
        <div class="md:w-4/12 h-full">
            <div class="rounded-lg shadow bg-white h-full p-6">
                <form method="POST" novalidate>
                    @csrf
                    <div class="mb-5">
                        <label for="username" class="mb-2 uppercase block text-gray-500 font-bold">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username"
                            class="w-full border p-3 rounded-lg @error('username') border-red-500 @enderror"
                            value="{{ old('username') }}">
                        @error('username')
                            <span class="text-red-500 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password" class="mb-2 uppercase block text-gray-500 font-bold">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="w-full border p-3 rounded-lg @error('password') border-red-500 @enderror">
                        @error('password')
                            <span class="text-red-500 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <input type="submit" value="Login"
                            class="w-full border p-3 rounded-lg bg-indigo-600 text-gray-100 hover:bg-indigo-700 cursor-pointer transition-shadow font-bold">
                    </div>
                    @if (session('status'))
                        <div class="text-red-500 p-4 rounded-lg mt-5 text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection
