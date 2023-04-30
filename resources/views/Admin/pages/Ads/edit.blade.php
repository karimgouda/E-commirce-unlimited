@extends('Admin/includes/master')
@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col col-md-8 m-auto">
                <form action="{{route('admin.ads.update',$ad)}}" method="post" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <input type="text" name="name_en" placeholder="{{$ad->getTranslation('name','en')}}" class="form-control my-2">
                    @error('name_en')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="text" name="name_ar" placeholder="{{$ad->getTranslation('name','ar')}}" class="form-control my-2">
                    @error('name_ar')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="file" name="image" class="form-control my-2">
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <img src="{{asset($ad->image)}}" alt="" width="10%" style="display: block">
                    <button class="btn btn-success">Edit Ads</button>
                </form>
            </div>
        </div>
    </div>
@endsection
