@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <h2 class="text-center text-danger">{{__("dashboard.edit_product")}}</h2>
                <div class="form-group">
                    <form action="{{route('admin.product.update',$product)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <input class="form-control my-2" type="text" value="{{$product->getTranslation('name','en')}}" placeholder="{{__("dashboard.product_en")}}" name="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input class="form-control my-2" type="text" placeholder="{{__("dashboard.product_ar")}}" value="{{$product->getTranslation('name','ar')}}" name="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input class="form-control my-2" type="number" value="{{$product->price}}" placeholder="{{__("dashboard.price")}}" name="price">
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input class="form-control my-2" value="{{$product->count}}" type="number" placeholder="{{__("dashboard.count")}}" name="count">
                        @error('count')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <textarea class="form-control my-2" name="desc_en" placeholder="{{__("dashboard.desc_en")}}">{{$product->getTranslation('desc','en')}}</textarea>
                        @error('desc_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <textarea class="form-control my-2" name="desc_ar" placeholder="{{__("dashboard.desc_ar")}}">{{$product->getTranslation('desc','ar')}}</textarea>
                        @error('desc_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <select class="form-control my-2" name="category_id">
                        <option value="">Select Category Menu</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @selected('category_id')>{{$category->name}}</option>
                        @endforeach
                    </select>
                        @error('category_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    <input type="file" class="form-control my2" name="image">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <img src="{{asset($product->image)}}" style="display: block" width="10%" alt="" srcset="">
                    <button class="btn btn-success mt-2">{{__("dashboard.edit_product")}}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
