@extends('layouts.app')

@section('content')

<h1>Add new user</h1>

        <form method="POST" action="{{ route('register') }}">
         {{ csrf_field() }}

            <!-- Name -->
            <!-- <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div> -->

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            
            <div class="form-floating mb-3">
                <input id="firstname"  type="text" name="firstname" :value="old('firstname')" required autofocus class="form-control"/>
                <label for="firstname">Firstname</label>
            </div>
            @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="middlename"  type="text" name="middlename" :value="old('middlename')" required autofocus class="form-control"/>
                <label for="middlename">Middlename</label>
            </div>
            @if ($errors->has('middlename'))
                    <span class="text-danger">{{ $errors->first('middlename') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="lastname"  type="text" name="lastname" :value="old('lastname')" required autofocus class="form-control"/>
                <label for="lastname">Lastname</label>
            </div>
            @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
@endsection