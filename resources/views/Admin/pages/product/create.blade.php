@extends('Admin/includes/master')
@push('css')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="{{asset('assetsAdmin/src/plugins/css/light/editors/markdown/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsAdmin/src/plugins/css/dark/editors/markdown/simplemde.min.css')}}">
    <!-- END PAGE LEVEL STYLE -->

@endpush
@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <h2 class="text-center text-danger">{{__("dashboard.addProduct")}}</h2>
                <div class="form-group">
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @include('Admin.pages.product.inc._form')
                        <button class="btn btn-success mt-2">{{__("dashboard.addProduct")}}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assetsAdmin/src/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('assetsAdmin/src/plugins/src/editors/markdown/simplemde.min.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    @foreach(LaravelLocalization::getSupportedLanguagesKeys() as $key)

        <script>
            new SimpleMDE({
                element: document.getElementById("product_{{$key}}"),
                spellChecker: false,
            });
        </script>
    @endforeach
@endpush
