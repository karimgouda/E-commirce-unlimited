                @csrf
        @foreach(\App\Models\Admin\Product::$translatableData as $item=>$lang)
            @foreach(LaravelLocalization::getSupportedLanguagesKeys() as $key)
                @if($lang['type'] == 'text')
            <input class="form-control my-2" type="{{$lang['type']}}"  placeholder="{{__("dashboard.product_".$key)}}" name="name_{{$key}}">
            @error('name_'.$key)
            <p class="text-danger">{{$message}}</p>
            @enderror
                @else
            <textarea class="form-control my-2" name="desc_{{$key}}"  id="product_{{$key}}" placeholder="{{__("dashboard.desc_".$key)}}"></textarea>
            @error('desc_'.$key)
            <p class="text-danger">{{$message}}</p>
            @enderror
                @endif
            @endforeach
        @endforeach







                <input class="form-control my-2" type="number"  placeholder="{{__("dashboard.price")}}" name="price">
                @error('price')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <input class="form-control my-2" type="number"  placeholder="{{__("dashboard.count")}}" name="count">
                @error('count')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <select class="form-control my-2"  name="category_id">
                    <option selected>Selected</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="file" class="form-control my2" name="image">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror

