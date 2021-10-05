@extends('layouts.app')


@section('content')


@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

<form method="POST" action="{{ route('createStudent') }}">
        {{ csrf_field() }}
<div class="form-floating mb-3">
                <input id="firstname"  type="text" name="firstname" :value="old('firstname')" autofocus class="form-control"/>
                <label for="firstname">Firstname</label>
            </div>
            @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="middlename"  type="text" name="middlename" :value="old('middlename')" autofocus class="form-control"/>
                <label for="middlename">Middlename</label>
            </div>
            @if ($errors->has('middlename'))
                    <span class="text-danger">{{ $errors->first('middlename') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="lastname"  type="text" name="lastname" :value="old('lastname')" autofocus class="form-control"/>
                <label for="lastname">Lastname</label>
            </div>
            @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                @endif
<button type="submit">Submit</button>
</form>


@endsection