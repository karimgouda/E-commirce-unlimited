@extends('Admin/includes/master')
@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col col-md-8 m-auto">
                <form action="{{route('admin.ads.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name_en" placeholder="Name_en" class="form-control my-2">
                    @error('name_en')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="text" name="name_ar" placeholder="Name_ar" class="form-control my-2">
                    @error('name_ar')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="file" name="image" class="form-control my-2">
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button class="btn btn-success">Add new ads</button>
                </form>
            </div>
        </div>
    </div>
@endsection
