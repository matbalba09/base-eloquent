<form method="POST" action="{{ route('storeCourse') }}" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input id="title"  type="text" name="title" :value="old('title')" required autofocus class="form-control"/>
                <label for="title">title</label>
            </div>
            @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="description"  type="text" name="description" :value="old('description')" required autofocus class="form-control"/>
                <label for="description">description</label>
            </div>
            @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="duration"  type="text" name="duration" :value="old('duration')" required autofocus class="form-control"/>
                <label for="duration">duration</label>
            </div>
            @if ($errors->has('duration'))
                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                @endif
            <div class="form-floating mb-3">
                <input id="level"  type="text" name="level" :value="old('level')" required autofocus class="form-control"/>
                <label for="level">level</label>
            </div>
            @if ($errors->has('level'))
                    <span class="text-danger">{{ $errors->first('level') }}</span>
                @endif
                <div class="form-floating mb-3">
                <input id="price"  type="text" name="price" :value="old('price')" required autofocus class="form-control"/>
                <label for="price">price</label>
            </div>
            @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <div class="form-floating mb-3">
                <input id="image"  type="file" name="image" :value="old('image')" required autofocus class="form-control"/>
                <label for="image">image</label>
            </div>
            @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                <select name="location">
              @foreach($locations as $location)
              <option value="{{ $location->id }}">{{ $location->name }}</option>
              @endforeach
            </select>

            @if ($errors->has('location'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('location') }}</strong>
                </span>
            @endif

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>