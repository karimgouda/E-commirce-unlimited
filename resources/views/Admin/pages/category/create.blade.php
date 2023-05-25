@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">

            <div class="col-lg-8 m-auto">
                <h2 class="text-center mb-2" style="font-style: italic">  {{__("dashboard.addCategory")}} </h2>
                <div class="form-group">
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">

                        @include('Admin.pages.category.inc._form')


                        <button class="btn btn-success">{{__("dashboard.addCategory")}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
