@extends('EndUser/includes/master')
@section('content')
    <div class="container-fluid">


        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                    <tr>
                        <th>Remove</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Order confirmation</th>

                    </tr>
                    </thead>
                    <tbody class="align-middle">
                    @foreach($carts as $cart)
                    <tr>
                        <td class="align-middle">
                            <form action="{{url("cart/delete/$cart->id")}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    <form action="{{url("order/order/$cart->id")}}" method="post">
                        @csrf
                        <td class="align-middle"><img src="{{asset($cart->product->image)}}" alt="" style="width: 50px;"> {{$cart->product->name}}</td>
                        <td class="align-middle">${{$cart->product->price}}</td>
                        <td class="col-3">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input  type="text" id="input" name="quantity" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td ><button class="btn btn-success">Order confirmation</button></td>
                    </form>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">


                    </div>
                    <div class="pt-2">
                        <a href="{{route('endUser.checkOut')}}"  class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
