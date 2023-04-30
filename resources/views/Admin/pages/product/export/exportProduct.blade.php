<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Slug</th>
        <th>description</th>
        <th>Image Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->count}}</td>
            <td>{{$product->slug}}</td>
            <td>{{$product->desc}}</td>
            <td>{{$product->image}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
