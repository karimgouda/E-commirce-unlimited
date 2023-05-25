@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <h2 class="text-center text-danger">{{__("dashboard.edit_product")}}</h2>
                <div class="form-group">
                    <form action="{{route('admin.product.update',$product)}}" method="post" enctype="multipart/form-data">

                        @method('PUT')
                    @include('Admin.pages.product.inc._form')
                        <img src="{{asset($product->image)}}" style="display: block" width="10%" alt="" srcset="">
                    <button class="btn btn-success mt-2">{{__("dashboard.edit_product")}}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
