<form method="POST" action="{{ route('storeGallery') }}" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input id="name"  type="text" name="name" :value="old('name')" required autofocus class="form-control"/>
                <label for="name">name</label>
            </div>
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            <div class="form-floating mb-3">
                {{-- <input id="path"  type="file" name="path" :value="old('path')" required autofocus class="form-control"/> --}}
                <input id="image"  type="file" name="image" :value="old('image')" required autofocus class="form-control"/>

                <label for="image">image</label>
            </div>
            @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>