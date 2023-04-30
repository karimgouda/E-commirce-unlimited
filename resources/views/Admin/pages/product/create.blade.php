@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <h2 class="text-center text-danger">{{__("dashboard.addProduct")}}</h2>
                <div class="form-group">
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <input class="form-control my-2" type="text"  placeholder="{{__("dashboard.product_en")}}" name="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input class="form-control my-2" type="text"  placeholder="{{__("dashboard.product_ar")}}" name="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input class="form-control my-2" type="number"  placeholder="{{__("dashboard.price")}}" name="price">
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input class="form-control my-2" type="number"  placeholder="{{__("dashboard.count")}}" name="count">
                        @error('count')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <textarea class="form-control my-2" name="desc_en"  placeholder="{{__("dashboard.desc_en")}}"></textarea>
                        @error('desc_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <textarea class="form-control my-2" name="desc_ar"  placeholder="{{__("dashboard.desc_ar")}}"></textarea>
                        @error('desc_ar')
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
                    <button class="btn btn-success mt-2">{{__("dashboard.addProduct")}}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
