{{-- @extends('layouts.app')


@section('content') --}}


@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

        <form method="POST" action="{{ route('storeTeacher') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-floating mb-3">
                   <input id="firstname"  type="text" name="firstname" :value="old('firstname')" required autofocus class="form-control"/>
                   <label for="firstname">firstname</label>
                </div>
                 @if ($errors->has('firstname'))
                       <span class="text-danger">{{ $errors->first('firstname') }}</span>
                   @endif
                
                <div class="form-floating mb-3">
                   <input id="middlename"  type="text" name="middlename" :value="old('middlename')"/>
                   <label for="middlename">middlename</label>
                </div>
                @if ($errors->has('middlename'))
                       <span class="text-danger">{{ $errors->first('middlename') }}</span>
                   @endif

                <div class="form-floating mb-3">
                   <input id="lastname"  type="text" name="lastname" :value="old('lastname')" required autofocus class="form-control"/>
                   <label for="lastname">lastname</label>
                </div>
                @if ($errors->has('lastname'))
                       <span class="text-danger">{{ $errors->first('lastname') }}</span>
                   @endif

                <div class="form-floating mb-3">
                   <input id="suffix"  type="text" name="suffix" :value="old('suffix')"/>
                   <label for="suffix">suffix</label>
                </div>
                @if ($errors->has('suffix'))
                       <span class="text-danger">{{ $errors->first('suffix') }}</span>
                    @endif

                {{-- <div class="form-floating mb-3">
                <input id="username"  type="text" name="username" :value="old('username')"/>
                <label for="username">username</label>
                </div>
                @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif --}}

                <div class="form-floating mb-3">
                    <input id="email"  type="text" name="email" :value="old('email')"/>
                    <label for="email">email</label>
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                <div class="form-floating mb-3">
                <input id="contact"  type="text" name="contact" :value="old('contact')" required autofocus class="form-control"/>
                <label for="contact">contact</label>
                </div>
                @if ($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                    @endif

               <div class="form-floating mb-3">
                <input id="age"  type="text" name="age" :value="old('age')" required autofocus class="form-control"/>
                <label for="age">age</label>
                </div>
                @if ($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif

                <select name="gender">
                    <option value="{{ App\Response::MALE }}">Male</option>
                    <option value="{{ App\Response::FEMALE }}">Female</option>
                  </select>
                </div>

                {{-- <select name="role">
                    <option value="{{ App\Response::ADMIN }}">Admin</option>
                    <option value="{{ App\Response::STUDENT }}">Student</option>
                    <option value="{{ App\Response::TEACHER }}">Teacher</option>
                  </select>
                </div> --}}

               <div class="form-floating mb-3">
                <input id="location"  type="text" name="location" :value="old('location')" required autofocus class="form-control"/>
                <label for="location">location</label>
                </div>
                @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif

               <div class="form-floating mb-3">
                   {{-- <input id="path"  type="file" name="path" :value="old('path')" required autofocus class="form-control"/> --}}
                   <input id="avatar"  type="file" name="avatar" :value="old('avatar')" required autofocus class="form-control"/>
   
                   <label for="avatar">avatar</label>
               </div>
               @if ($errors->has('avatar'))
                       <span class="text-danger">{{ $errors->first('avatar') }}</span>
                   @endif
               
               <div class="flex items-center justify-end mt-4">
                   <x-button class="ml-4">
                       {{ __('Submit') }}
                   </x-button>
               </div>
           </form>


{{-- @endsection --}}