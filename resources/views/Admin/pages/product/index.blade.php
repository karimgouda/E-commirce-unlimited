@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('admin.product.export')}}" class="btn btn-primary">Export Products</a>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{__("dashboard.product_name")}}</th>
                            <th class="text-center"> {{__("dashboard.product_image")}}</th>
                            <th>{{__("dashboard.count")}}</th>
                            <th>{{__("dashboard.price")}}</th>
                            <th class="w-25 text-center">{{__("dashboard.product_desc")}}</th>
                            <th>{{__("dashboard.category_product")}}</th>
                            <th>{{__("dashboard.action")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>
                                <div class="image w-100 m-auto">
                                    <img src="{{asset($product->image)}}" width="100%" alt="" srcset="">
                                </div>
                            </td>
                            <td>{{$product->count}}</td>
                            <td >{{$product->price}}</td>
                            <td>
                                {{$product->desc}}
                            </td>
                            <td>{{$product->category->name}}</td>
                            <td>
                                <a href="{{route('admin.product.edit',$product)}}" class="btn btn-primary">{{__("dashboard.edit")}}</a>
                                <form action="{{route('admin.product.delete',$product)}}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">{{__("dashboard.delete")}}</button>
                                </form>
                            </td>


                        </tr>
                        @empty
                            <div>No Data Found</div>
                        @endforelse
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
