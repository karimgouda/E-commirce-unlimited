@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">

            <div class="col-lg-8 m-auto">
                <h1 class="text-center mb-2" style="font-style: italic"> {{__('dashboard.edit_category')}}</h1>
                <div class="form-group">
                    <form action="{{route('admin.category.update',$category)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="text" class="form-control my-2"  value="{{$category->getTranslation('name','en')}}" name="name_en" placeholder="{{__("dashboard.name_en")}}">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <input type="text" class="form-control my-2" name="name_ar" value="{{$category->getTranslation('name','ar')}}" placeholder="{{__("dashboard.name_en")}}">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <input type="file" name="image" class="form-control my-2">
                        <img src="{{asset($category->image)}}" width="10%" alt="" srcset="" style="display: block" class="my-2">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button class="btn btn-success">{{__("dashboard.edit_category")}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
