@csrf
@foreach(\App\Models\Admin\Category::$translatableData as $item=>$lang)
    @foreach(LaravelLocalization::getSupportedLanguagesKeys() as $key )
        <input type="{{$lang['type']}}" class="form-control my-2"  value="{{old('name_'.$key)}}" name="{{$item}}_{{$key}}" placeholder="{{__("dashboard.name_".$key)}}">
        @error($item.'_'.$key)
        <p class="text-danger">{{$message}}</p>
        @enderror
    @endforeach
@endforeach






<input type="file" name="image" class="form-control my-2">
@error('image')
<p class="text-danger">{{$message}}</p>
@enderror
