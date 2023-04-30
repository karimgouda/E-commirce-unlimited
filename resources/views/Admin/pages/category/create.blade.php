@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">

            <div class="col-lg-8 m-auto">
                <h2 class="text-center mb-2" style="font-style: italic">  {{__("dashboard.addCategory")}} </h2>
                <div class="form-group">
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control my-2"  value="{{old('name_en')}}" name="name_en" placeholder="{{__("dashboard.name_en")}}">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <input type="text" class="form-control my-2" name="name_ar" value="{{old('name_ar')}}" placeholder="{{__("dashboard.name_ar")}}">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <input type="file" name="image" class="form-control my-2">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button class="btn btn-success">{{__("dashboard.addCategory")}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
