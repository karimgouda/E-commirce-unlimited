@php use Illuminate\Support\Facades\Auth; @endphp
@extends('EndUser/includes/master')

@section('content')
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span>
                </h5>
                <div class="bg-light p-30 mb-5">
                    <form action="{{route('endUser.create')}}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John" name="first_name">
                        </div>
                        @error('first_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe" name="last_name">
                        </div>
                        @error('last_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" placeholder="example@email.com" name="email">
                        </div>
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name="phone">
                        </div>
                        @error('phone')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="address_one">
                        </div>
                        @error('address_one')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="address_tow">
                        </div>
                        @error('address_tow')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            @php
                                $types = ['cairo','giza','mansoura'];
                            @endphp
                            <label>Country</label>
                            <select class="custom-select" name="country">
                                <option selected>Default select</option>
                                @foreach($types as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                @endforeach


                            </select>
                        </div>
                        @error('country')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York" name="city">
                        </div>
                        @error('city')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                        <input type="submit" style="display: none" id="send">
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span>
                </h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        @foreach($orders as $order)
                            @if($order->cart->user_id == Auth::id())
                                <div class="d-flex justify-content-between">
                                    <p>{{$order->cart->product->name}}</p>
                                    <p>${{$order->total }}</p>
                                </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                                <?php $sum = 0 ?>
                            @foreach($orders as $order)
                                @if($order->cart->user_id == Auth::id())
                                        <?php $sum =+$order->total * $orders->count() ?>
                                @endif

                            @endforeach
                            <h6>{{$sum}}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>${{$sum + 10}}</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span>
                    </h5>
                    <div class="bg-light p-30">
                        <?php  $con = '' ?>
                        @foreach($orders as $order)
                        <?php $con = $order->cart->user_id == Auth::id() ?>
                        @endforeach
                            @if( $con||empty($orders))
                                <label for="send"  class="btn btn-block btn-primary font-weight-bold py-3 ">Place Order</label>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
