@extends('Admin/includes/master')
@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col col-md-8 m-auto">
                <h1 class="text-center mb-2"> Edit Setting </h1>
                <style>
                    h1{
                        background-image: linear-gradient(102deg , aqua,red);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }
                </style>
                <form action="{{route('admin.setting.update',$setting->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$setting->phone}}"  class="form-control my-2" name="phone" placeholder="Phone">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="email" value="{{$setting->email}}" class="form-control my-2" name="email" placeholder="E-mail">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="text" value="{{$setting->address}}" class="form-control my-2" name="address" placeholder="Address">
                    @error('address')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <textarea class="form-control my-2"  name="desc_en" placeholder="Description English">{{$setting->getTranslation('desc','en')}}</textarea>
                    @error('desc_en')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <textarea class="form-control my-2" name="desc_ar" placeholder="Description Arabic">{{$setting->getTranslation('desc','ar')}}</textarea>
                    @error('desc_ar')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button class="btn btn-success"> Edit Setting </button>
                </form>
            </div>
        </div>
    </div>
@endsection
