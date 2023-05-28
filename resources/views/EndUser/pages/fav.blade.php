@extends('EndUser/includes/master')

@section('content')
    <div class="row px-xl-5">
        <div class="col-lg-8 m-auto table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                <tr>
                    <th>Remove</th>
                    <th>Products</th>
                    <th>price</th>
                    <th>User</th>


                </tr>
                </thead>
                <tbody class="align-middle">

                @foreach($favs as $fav)
                    <tr>
                        <td class="align-middle">
                            <form action="{{route('endUser.deleteFav',$fav->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                        <form action="" method="post">
                            @csrf
                            <td class="align-middle"><img src="{{asset($fav->product->image)}}" alt="" style="width: 50px;"> {{$fav->product->name}}</td>
                            <td class="align-middle">${{$fav->product->price}}</td>

                        </form>
                        <td>{{$fav->user->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>

@endsection
