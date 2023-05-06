@extends('Admin/includes/master')
@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col col-md-8 m-auto">
                <h1 class="text-center mb-2"> Add Setting </h1>
                <style>
                    h1{
                        background-image: linear-gradient(102deg , aqua,red);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }
                </style>
                <form action="{{route('admin.setting.store')}}" method="post">
                    @csrf
                    <input type="text" class="form-control my-2" name="phone" placeholder="Phone">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="email" class="form-control my-2" name="email" placeholder="E-mail">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="text" class="form-control my-2" name="address" placeholder="Address">
                    @error('address')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <textarea class="form-control my-2" name="desc_en" placeholder="Description English"></textarea>
                    @error('desc_en')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <textarea class="form-control my-2" name="desc_ar" placeholder="Description Arabic"></textarea>
                    @error('desc_ar')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button class="btn btn-success"> Add Setting </button>
                </form>
            </div>
        </div>
    </div>
@endsection
