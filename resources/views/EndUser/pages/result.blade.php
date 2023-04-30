@section('result')
@if(count($products) > 0)
    @foreach($products as $product)
        <li class="list-group-item"><a href="">{{$product->name}} </a></li>
    @endforeach
@else
    <li class="list-group-item"> Not Result Found </li>

@endif

@endsection
